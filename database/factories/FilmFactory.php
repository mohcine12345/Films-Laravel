<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FilmFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(2, true),
            'year' => fake()->year,
            'description' => fake()->paragraph(),
        ];
    }
}