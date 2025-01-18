@extends('template')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">Films</p>
        <div class="select">
            <select onchange="window.location.href = this.value">
                <option value="{{ route('films.index') }}">Toutes catégories</option>
                @foreach($categories as $category)
                    <option value="{{ route('films.category', $category->slug) }}" {{ $slug == $category->slug ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <a href="{{ route('films.create') }}" class="button is-info">Créer un film</a>
    </header>
    <div class="card-content">
        <div class="content">
            @if(session()->has('success'))
                <div class="notification is-success">
                    {{ session('success') }}
                </div>
            @endif
            @if(session()->has('info'))
                <div class="notification is-info">
                    {{ session('info') }}
                </div>
            @endif
            <table class="table is-hoverable is-fullwidth">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Titre</th>
                        <th>Année</th>
                        <th>Catégorie</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($films as $film)
                    <tr>
                        <td>{{ $film->id }}</td>
                        <td>{{ $film->title }}</td>
                        <td>{{ $film->year }}</td>
                        <td>{{ $film->category->name }}</td>
                        <td>
                            <a href="{{ route('films.show', $film->id) }}" class="button is-primary">Voir</a>
                            <a href="{{ route('films.edit', $film->id) }}" class="button is-warning">Modifier</a>
                            <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button is-danger">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $films->links() }}
        </div>
    </div>
</div>
@endsection