<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Chapter>
 */
class ChapterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        static $index = 1;
        if ($index > 10) {
            $index = 1;
        }

        return [
            //
            "title" => fake()->name(),
            "intro" => fake()->text(),
            "story" => fake()->paragraph(100),
            "chapter" => $index++,
            "slug" => fake()->slug(),
            "book_id" => Book::factory(),
            "is_free" => false
        ];
    }
}
