<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfiles>
 */
class UserProfilesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::factory()->create(["role" => 0]);
        return [
            //
            "id" => $user->id,
            "user_id" => $user->id,
            "about" => fake()->paragraph(),
            "genres" => "1,2,3",
            "address" => fake()->address()
        ];
    }
}
