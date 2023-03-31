<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Tightenco\Ziggy\Ziggy;

class ZiggyTsDefinitionsCommand extends Command
{
    protected $signature = 'ziggy:ts-definitions';

    protected $description = 'Generate TS definitions for ziggy';

    protected $files;

    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    public function handle()
    {
        $path = './resources/types/ziggy.d.ts';
        $generatedRoutes = $this->generate();

        $this->makeDirectory($path);
        $this->files->put(base_path($path), $generatedRoutes);

        $this->info('File generated!');
    }

    private function generate(): string
    {
        $ziggy = (new Ziggy(false, null));
        $routes = collect($ziggy->toArray()['routes'])
            ->map(function ($route, $key) {
                $methods = json_encode($route['methods'] ?? []);

                return <<<TYPESCRIPT
                        "{$key}": {
                            "uri": "{$route['uri']}",
                            "methods": {$methods}
                        },
                    TYPESCRIPT;
            })
            ->join("\n");

        return <<<TYPESCRIPT
            import {Config, RouteParam, RouteParamsWithQueryOverload, Router} from "ziggy-js";
        
            type LaravelRoutes = {
            {$routes}
                [key: string]: {
                    [key: string]: any
                }
            }
        
            declare global {
                declare interface ZiggyLaravelRoutes extends LaravelRoutes {}
                declare function route(): Router;
                declare function route(
                    name: keyof ZiggyLaravelRoutes, 
                    params?: RouteParamsWithQueryOverload | RouteParam, 
                    absolute?: boolean, 
                    customZiggy?: Config
                ): string;
            }

            export declare module '@vue/runtime-core' {
                interface ZiggyLaravelRoutes extends LaravelRoutes {}
                interface ComponentCustomProperties {
                    route(): Router;
                    route(
                        name: keyof ZiggyLaravelRoutes, 
                        params?: RouteParamsWithQueryOverload | RouteParam, 
                        absolute?: boolean, 
                        customZiggy?: Config
                    ): string;
                }
            }
            export { LaravelRoutes };
            TYPESCRIPT;
    }

    protected function makeDirectory($path)
    {
        if (! $this->files->isDirectory(dirname(base_path($path)))) {
            $this->files->makeDirectory(dirname(base_path($path)), 0755, true, true);
        }

        return $path;
    }
}
