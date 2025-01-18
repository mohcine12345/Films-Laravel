<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Nom de la catégorie
            $table->string('slug')->unique(); // Slug pour les URLs
            $table->timestamps(); // Created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};