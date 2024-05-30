<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'text' => fake()->text(300),
            'src' => fake()->imageUrl(600, 400),
            'alt' => fake()->text(50),
            'publish' => fake()->boolean(),
            'created_at' => fake()->dateTimeBetween('-3 years','now')
        ];
    }
}
