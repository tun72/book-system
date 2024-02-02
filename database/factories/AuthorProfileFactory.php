<?php

namespace Database\Factories;

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
        $user = User::factory()->create(["role" => 2]);

        return [
            //
            "id" => $user->id,
            "user_id" => $user->id,
            "name" => $user->name
        ];
    }
}
