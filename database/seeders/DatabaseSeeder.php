<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Video::factory(5)->create();
        for($i=1; $i< 5; $i++){
            \App\Models\Rate::factory()->create([
                'user_id' =>$i,
                'video_id' =>$i,
                'rating' => rand(1,5) ]);
        }
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
