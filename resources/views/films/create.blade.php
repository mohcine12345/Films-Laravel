@extends('template')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Créer un film</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('films.store') }}" method="POST">
                @csrf
                <div class="field">
                    <label class="label">Titre</label>
                    <div class="control">
                        <input class="input" type="text" name="title" placeholder="Titre du film" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Année de sortie</label>
                    <div class="control">
                        <input class="input" type="number" name="year" placeholder="Année de sortie" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea" name="description" placeholder="Description du film" required></textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Créer</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection