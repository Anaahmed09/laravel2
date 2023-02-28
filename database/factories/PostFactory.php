<?php

namespace Database\Factories;

use App\Models\auther;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'auther_id' => auther::inRandomOrder()->first()->id,
            'title' => fake()->title(),
            'description' => fake()->text(),
        ];
    }
}