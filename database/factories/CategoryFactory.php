<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $name = fake()->word(); // Génère un nom de catégorie aléatoire
        return [
            'name' => $name,
            'slug' => str()->slug($name), // Génère un slug à partir du nom
        ];
    }
}