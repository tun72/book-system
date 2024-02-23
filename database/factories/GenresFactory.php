<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\genres>
 */
class GenresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->name(),
            "slug" => fake()->slug(),
            "about" => fake()->paragraph(3),
            "image" => "https://api.dicebear.com/7.x/bottts/svg?size=32"
        ];
    }
}
