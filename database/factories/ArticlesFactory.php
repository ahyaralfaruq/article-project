<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articles>
 */
class ArticlesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->faker->slug(),
            'excerpt' => $this->faker->paragraph(mt_rand(1,2)),
            'description' => $this->faker->paragraph(mt_rand(2,10)),
            'image' => "sabo-ace.jpg",
            'user_id' => mt_rand(1,5),
            'category_id' => mt_rand(1,2)
        ];
    }
}
