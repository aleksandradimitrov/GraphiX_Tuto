<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ZiggyAllCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ziggy:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'ziggy:generate + ziggy:ts-definitions + eslint for ziggy.js';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $eslintPath = './resources/types/.eslint-ziggy.json';

        $ziggyPath = './resources/js/ziggy.js';

        $this->call('ziggy:generate');

        shell_exec('npx eslint -c '.$eslintPath.' --fix '.$ziggyPath);

        $this->call('ziggy:ts-definition');

        return Command::SUCCESS;
    }
}
