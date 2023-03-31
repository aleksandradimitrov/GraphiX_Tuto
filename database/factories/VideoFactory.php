<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'url' => fake()->word(),
            'title' => fake()->word(),
            'description' => fake()->word(),
            'public' => true,
            'thumbnail_photo_path' => 'https://picsum.photos/id/237/200/300'
        ];
    }
}
