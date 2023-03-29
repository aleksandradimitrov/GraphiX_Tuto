<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Photoshop', 'Illustrator', 'Figma', 'InDesign'];
        foreach($categories as $category){
            $categoryModel = \App\Models\Category::factory()->create([
                'name' => $category
            ]);
        }
        \App\Models\Video::factory()->create([
            'category_id' => 1,
            'title'=>'Photoshop Tutorial for Beginners 2022',
            'description' => 'If you want to see more photo and video editing tutorials with photoshop cc 2022,
             make sure to comment below and subscribe to the channel.
             Hope you like it, cheers!',
            'thumbnail_photo_path' => 'https://img.youtube.com/vi/61mkx_OV61s/maxresdefault.jpg',
            'url' => 'https://www.youtube.com/watch?v=61mkx_OV61s'
         ]);
         \App\Models\Video::factory()->create([
            'category_id' => 1,
            'title'=>'Adobe Photoshop Tutorial: EVERY Tool in the Toolbar',
            'description' => 'In this video we take a look at EVERY toolbar tool in Adobe Photoshop CC.
             Try Adobe Creative Cloud for free: https://www.adobe.com/?sdid=49F59KY6',
            'thumbnail_photo_path' => 'https://img.youtube.com/vi/2cQT1ZgvgGI/maxresdefault.jpg',
            'url' => 'https://www.youtube.com/watch?v=2cQT1ZgvgGI'
         ]);
         \App\Models\Video::factory()->create([
            'category_id' => 1,
            'title'=>'How to Use Adobe Photoshop',
            'description' => 'Learn Share Photo Video was started by CJam (Chris James)
            to help creative individuals get started in their craft by knowing the basics of graphic design,
             photography, and video editing.',
            'thumbnail_photo_path' => 'https://img.youtube.com/vi/mvAceDeU_gU/maxresdefault.jpg',
            'url' => 'https://www.youtube.com/watch?v=mvAceDeU_gU'
         ]);
         

    }
}
