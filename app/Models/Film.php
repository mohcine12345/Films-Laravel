<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    // Champs autorisés pour l'assignation en masse
    protected $fillable = ['title', 'year', 'description', 'category_id'];

    // Relation n:1 avec les catégories
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}