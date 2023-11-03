<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
        $isFree = rand(0, 1);
        return [
            "title" => fake()->name(),
            "slug" => fake()->slug(),
            "body" => fake()->paragraph(),
            "image" => 'https://loremflickr.com/640/480?lock=' . rand(100, 1000),
            "file" => fake()->url(),
            "publish" => fake()->year(),
            "rating" => rand(1, 5),
            "isFree" => $isFree,
            "ggcoin" => $isFree !=0 ? 1000 : 0,
            "user_id" => User::factory()->create(["role" => 2]),
        ];
    }
}
