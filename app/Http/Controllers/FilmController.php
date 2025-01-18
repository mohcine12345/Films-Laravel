<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Film;
use App\Models\Category; // Importez le modèle Category
use App\Http\Requests\FilmRequest;

class FilmController extends Controller
{
    // Affiche la liste des films (filtrés par catégorie si un slug est fourni)
    public function indexByCategory($slug): View
{
    // Récupère la catégorie correspondant au slug
    $category = Category::where('slug', $slug)->firstOrFail();

    // Récupère les films de cette catégorie
    $films = $category->films()->paginate(5);

    // Récupère toutes les catégories pour la liste déroulante
    $categories = Category::all();

    // Retourne la vue avec les films filtrés
    return view('films.index', compact('films', 'categories', 'slug'));
}
public function index($slug = null): View
{
    // Si un slug est fourni, filtre les films par catégorie
    $query = $slug
        ? Category::where('slug', $slug)->firstOrFail()->films()
        : Film::query();

    // Récupère les films triés par titre
    $films = $query->oldest('title')->paginate(5);

    // Récupère toutes les catégories pour la liste déroulante
    $categories = Category::all();

    // Retourne la vue avec les données
    return view('films.index', compact('films', 'categories', 'slug'));
}
    // Affiche le formulaire de création d'un film
    public function create(): View
    {
        $categories = Category::all();
        return view('films.create', compact('categories'));
    }

    // Enregistre un nouveau film dans la base de données
    public function store(FilmRequest $request): RedirectResponse
    {
        Film::create($request->validated());
        return redirect()->route('films.index')->with('success', 'Le film a bien été créé.');
    }

    // Affiche les détails d'un film
    public function show(Film $film): View
    {
        return view('films.show', compact('film'));
    }

    // Affiche le formulaire de modification d'un film
    public function edit(Film $film): View
    {
        $categories = Category::all();
        return view('films.edit', compact('film', 'categories'));
    }

    // Met à jour un film dans la base de données
    public function update(FilmRequest $request, Film $film): RedirectResponse
    {
        $film->update($request->validated());
        return redirect()->route('films.index')->with('success', 'Le film a bien été mis à jour.');
    }

    // Supprime un film de la base de données
    public function destroy(Film $film): RedirectResponse
    {
        $film->delete();
        return back()->with('info', 'Le film a bien été supprimé.');
    }
}