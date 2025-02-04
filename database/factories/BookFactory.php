<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ninja>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */



    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'author' => fake()->name(),
            'category' => fake()-> randomElement(['Comedy', 'Adventure', 'Educational', 'Horror', 'Romance', 'Sci-fi', 'Thriller']),
            'cover_image' => fake()->image(),
            'description' =>fake()->realText(100),
        ];
    }
}