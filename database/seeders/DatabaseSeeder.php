<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use App\Models\{RequestCall, Review, User};
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
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Oleh',
            'email' => 'peretjatkool@gmail.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);
//        RequestCall::factory(50)->create();
        DB::table('reviews')->insert([
            [
                'name' => 'Oleh Peretiatko',
                'text' => 'Absolutely thrilled with the lawn trimming service provided by J&J. Their attention to detail is unmatched, and my yard has never looked better. Highly recommend their expertise to anyone seeking top-notch lawn care!',
                'src' => fake()->imageUrl(600, 400),
                'alt' => 'Grass cutting Co.Mayo Newport',
                'publish' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Oksana',
                'text' => 'I recently used their services, and the results exceeded all my expectations! First and foremost, the J&J team was incredibly professional. They arrived exactly on time and immediately got to work. Their equipment was modern and well-maintained, which spoke volumes about the high standards of the company. Secondly, the quality of their work was top-notch. My lawn has never looked so green and well-kept. The shrubs were trimmed perfectly, taking into account all my preferences regarding shape and height. It\`s clear that the specialists at J&J know their craft and work with great attention to detail.',
                'src' => fake()->imageUrl(600, 400),
                'alt' => 'Grass cutting Co.Mayo Newport',
                'publish' => true,
                'created_at' => now()
            ]

        ]);
    }
}
