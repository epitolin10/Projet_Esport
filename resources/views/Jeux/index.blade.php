<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Jeux - eSport Game Hub</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- Barre de navigation -->
    <nav>
        <a href="/" class="logo">
            <div class="logo-icon">🎮</div>
            <span class="logo-text">eSport Game Hub</span>
        </a>
        <a href="/connexion" class="btn-connexion">Connexion</a>
    </nav>

    <!-- Contenu principal -->
    <div class="container">
        <h1>Bienvenue dans Esport Game Hub</h1>
        <h2>Voici la liste des jeux eSportifs disponibles :</h2>

        <!-- Grille de jeux (remplace le tableau) -->
        <div class="games-grid">
            @foreach ($jeux as $jeu)
                <div class="game-card">
                    <img src="{{ $jeu->image_url }}" alt="{{ $jeu->nom_jeux }}" class="game-image">
                    <div class="game-content">
                        <h3 class="game-title">{{ $jeu->nom_jeux }}</h3>
                        <div class="game-info">
                            <span class="game-tag">{{ $jeu->editeur }}</span>
                            <span class="game-tag">{{ $jeu->categorie }}</span>
                        </div>
                        <p class="game-description">{{ $jeu->description }}</p>
                        <a href="{{ route('jeux.show', ['id' => $jeu->id]) }}" class="btn-details">
                            Voir Détails
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>