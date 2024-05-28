<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RequestCallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        DB::table('request_calls')->insert([
            'name' => Str::random(10),
            'phone_number' => '+353-'.Str::random(2).'-'.Str::random(3).'-'.Str::random(4),
            'text' => $faker->text(255),
        ]);
    }
}
