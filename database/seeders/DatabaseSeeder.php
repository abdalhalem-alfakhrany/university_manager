<?php

namespace Database\Seeders;

use App\Enums\UserGenderEnum;
use App\Models\User;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::query()->create([
            "name" => "admin",
            "email" => "admin@app.com",
            "password" => Hash::make('123456789'),
            'gender' => UserGenderEnum::Male,
        ]);
    }
}
