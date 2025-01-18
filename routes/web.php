<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FilmController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('films', FilmController::class);
Route::get('/test-log', function () {
    Log::info('Ceci est un message de test pour vérifier les logs.');
    return 'Message de test enregistré dans les logs.';
});
Route::get('category/{slug}/films', [FilmController::class, 'indexByCategory'])->name('films.category');