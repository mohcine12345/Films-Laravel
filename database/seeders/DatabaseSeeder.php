<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Film;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Crée 10 catégories avec 4 films chacune
        Category::factory()
            ->has(Film::factory()->count(4))
            ->count(10)
            ->create();
    }
}