<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([

            'name' => Str::random(10),
            'login' => Str::random(6),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),

        ]);
    }
}
