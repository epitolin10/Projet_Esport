<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Tournois - eSport Game Hub</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
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
        <h1>Liste des Tournois</h1>
        <h2>Voici la liste des tournois à venir</h2>

        @if(!empty($tournois) && count($tournois) > 0)
            <div class="tournament-grid">
                @foreach ($tournois as $tournoi)
                    <div class="tournament-card">
                        <div class="tournament-header">
                            <div class="tournament-icon">🏆</div>
                            <div class="tournament-title">
                                <h3>{{ $tournoi->nom_tournoi }}</h3>
                                <span class="tournament-status">À venir</span>
                            </div>
                        </div>

                        <p class="tournament-description">
                            {{ $tournoi->description }}
                        </p>

                        <div class="tournament-details">
                            <div class="detail-item">
                                <div class="detail-label">
                                    📅 Date de début
                                </div>
                                <div class="detail-value">
                                    {{ \Carbon\Carbon::parse($tournoi->date_debut)->format('d/m/Y') }}
                                </div>
                            </div>

                            <div class="detail-item">
                                <div class="detail-label">
                                    🏁 Date de fin
                                </div>
                                <div class="detail-value">
                                    {{ \Carbon\Carbon::parse($tournoi->date_fin)->format('d/m/Y') }}
                                </div>
                            </div>

                            <div class="detail-item location-item">
                                <div class="detail-label">
                                    📍 Lieu
                                </div>
                                <div class="detail-value">
                                    {{ $tournoi->lieu }}
                                </div>
                            </div>
                        </div>

                        <a href="{{ route('tournois.informations', $tournoi->id) }}" class="btn-register">
                        Plus d'information ⚡
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <div class="empty-state-icon">🎮</div>
                <h3>Aucun tournoi disponible pour le moment</h3>
                <p>Revenez bientôt pour découvrir les prochains tournois !</p>
            </div>
        @endif
    </div>
</body>
</html>

