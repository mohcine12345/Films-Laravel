@extends('template')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Modifier un film</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('films.update', $film->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label">Titre</label>
                    <div class="control">
                        <input class="input" type="text" name="title" value="{{ $film->title }}" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Année de sortie</label>
                    <div class="control">
                        <input class="input" type="number" name="year" value="{{ $film->year }}" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Description</label>
                    <div class="control">
                        <textarea class="textarea" name="description" required>{{ $film->description }}</textarea>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Catégorie</label>
                    <div class="select">
                        <select name="category_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $film->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <button type="submit" class="button is-primary">Modifier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection