<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion des films</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
    <section class="hero is-fullheight is-primary">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title is-1">Bienvenue sur Gestion des films</h1>
                <h2 class="subtitle is-3">Une application simple pour gérer vos films préférés</h2>
                <div class="buttons is-centered">
                    <a href="{{ route('films.index') }}" class="button is-light is-large">Voir la liste des films</a>
                    <a href="{{ route('films.create') }}" class="button is-light is-large">Ajouter un film</a>
                </div>
            </div>
        </div>
    </section>
</body>
</html>