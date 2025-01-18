<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Titre du film
            $table->year('year'); // Année de sortie
            $table->text('description'); // Description du film
            $table->foreignId('category_id')->constrained()->onDelete('restrict')->onUpdate('restrict'); // Clé étrangère vers categories
            $table->timestamps(); // Created_at et updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};