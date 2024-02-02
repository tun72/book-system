<?php

namespace Database\Factories;

use App\Models\AuthorProfile;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use PharIo\Manifest\Author;

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

        $user = AuthorProfile::factory()->create();
        // dd($user->id);
        return [
            "title" => fake()->name(),
            "slug" => fake()->slug(),
            "body" => fake()->paragraph(),
            "image" => 'https://loremflickr.com/640/480?lock=' . rand(100, 1000),
            "publish" => fake()->year(),
            "rating" => rand(1, 5),
            "isFree" => $isFree,
            "ggcoin" => $isFree != 0 ? 1000 : 0,
            "isPublished" => true,
            "status" => "complete",
            "user_id" => $user->user_id,
        ];
    }
}
