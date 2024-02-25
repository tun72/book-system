<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AuthorProfile;
use App\Models\Book;
use App\Models\Chapter;
use App\Models\Genres;
use App\Models\ReadList;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserProfiles;
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

        // Book::factory(10)->has(Chapter::factory()->count(10))->create();
        Genres::factory(20)->create();
        UserProfiles::factory(20)->create();
        AuthorProfile::factory(20)->create();
        Setting::factory(1)->create();
    }
}
