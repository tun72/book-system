<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorProfile>
 */
class AuthorProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->has(Book::factory()->count(20)->has(Chapter::factory()->count(10)))->create(["role" => 2]);

        return [
            "id" => $user->id,
            "user_id" => $user->id,
            "name" => $user->name,
            "about" => fake()->paragraph(3),
            "isVerified" => true
        ];
    }
}
