@extends('template')

@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title">{{ $film->title }}</p>
    </header>
    <div class="card-content">
        <div class="content">
            <p><strong>Année de sortie :</strong> {{ $film->year }}</p>
            <p><strong>Catégorie :</strong> {{ $film->category->name }}</p>
            <p><strong>Description :</strong> {{ $film->description }}</p>
        </div>
    </div>
</div>
@endsection