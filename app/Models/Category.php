<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Champs autorisés pour l'assignation en masse
    protected $fillable = ['name', 'slug'];

    // Relation 1:n avec les films
    public function films()
    {
        return $this->hasMany(Film::class);
    }
}