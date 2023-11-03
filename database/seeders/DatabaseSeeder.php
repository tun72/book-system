<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Book;
use App\Models\Chapter;
use App\Models\Genres;
use App\Models\User;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            "email" => "admin@gmail.com",
            "password" => "admin123",
            "name" => "admin",
            "username" => "admin",
            "imageUrl" => "https://i.pinimg.com/564x/ec/9a/b2/ec9ab2c9257e838798e5509bd85edbdf.jpg",
            "role" => 1,
            'ggcoin' => 99999
        ]);

        Book::factory(10)->has(Chapter::factory()->count(10))->create();
        Genres::factory(20)->create();
        User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
