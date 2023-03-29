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
        // $categories = ['Photoshop', 'Illustrator', 'Figma', 'InDesign'];
        // foreach($categories as $category){
        //     $categoryModel = \App\Models\Category::factory()->create([
        //         'name' => $category
        //     ]);
        //     \App\Models\Video::factory(5)->create(['category_id' => $categoryModel->id ]);
        // }
        $this->call(VideoSeeder::class);

        \App\Models\User::factory(5)->create();
        
        
        for($i=1; $i< 6; $i++){
            for($j=1; $j<6; $j++){
                \App\Models\Rate::factory()->create([
                    'user_id' =>$j,
                    'video_id' =>$j,
                    'rating' => rand(1,5) ]);
            }
            
        }
        
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
