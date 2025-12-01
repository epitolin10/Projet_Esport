@include('Jeux.BarreNavigation')
@if(Auth::check() && Auth::user()->role === 'admin')
    <!-- Section Admin DANS le container -->
    <div class="container">
        <div class="admin-section">
            <div class="admin-header">
                <h2 class="admin-title">
                    ⚙️ Panneau d'Administration
                </h2>
                <p class="admin-subtitle">Ajouter une équipe</p>
            </div>

            <div class="admin-form-container">
                <!-- Messages de succès/erreur -->
                @if(session('success'))
                    <div class="alert-success">
                        ✅ {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert-error">
                        ⚠️ Erreurs détectées :
                        <ul style="margin: 0.5rem 0 0 1.5rem;">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('tournois.ajouter_equipe', $tournoi->id) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="id_equipe">👥 Nom de l'équipe</label>
                            <select id="id_equipe" name="id_equipe" required>
                                <option value="" disabled selected>Choisir une équipe</option>
                                @foreach($equipes as $equipe)
                                    <option value="{{ $equipe->id }}">{{ $equipe->nom_equipe }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn-ajouter">
                        ✨ Ajouter l'Équipe
                    </button>
                </form>
            </div>
        </div>
    </div>
@endif

    <!-- Contenu principal -->
    <main class="container">

        <!-- En-tête du tournoi -->
        <div class="tournoi-header">
            <h1 class="tournoi-title">{{ $tournoi->nom_tournoi }}</h1>
            
            <div class="tournoi-meta">
                <div class="meta-item">
                    <div class="meta-label">📅 Date de début</div>
                    <div class="meta-value">
                        {{ \Carbon\Carbon::parse($tournoi->date_debut)->format('d/m/Y') }}
                    </div>
                </div>

                <div class="meta-item">
                    <div class="meta-label">🏁 Date de fin</div>
                    <div class="meta-value">
                        {{ \Carbon\Carbon::parse($tournoi->date_fin)->format('d/m/Y') }}
                    </div>
                </div>

                <div class="meta-item">
                    <div class="meta-label">🎮 Jeu</div>
                    <div class="meta-value">{{ $tournoi->jeu->nom_jeux }}</div>
                </div>

                <div class="meta-item">
                    <div class="meta-label">👥 Équipes</div>
                    <div class="meta-value">
                        {{ $tournoi->participationsEquipes->count() }}
                    </div>
                </div>
            </div>
        </div>

        <!-- Section équipes participantes -->
        <h2 class="section-title">Équipes Participantes</h2>

        @if($tournoi->participationsEquipes->count() > 0)
            <div class="teams-grid">
                @foreach($tournoi->participationsEquipes as $participation)
                    <div class="team-card">
                        <div class="team-header">
                            @if ($participation->equipe->id != 6)
                                <img src="{{ asset('images/logo_équipes/' . $participation->equipe->logo_url) }}" 
                                 alt="Logo de {{ $participation->equipe->nom_equipe }}" 
                                 class="team-logo">
                            @endif
                            <h3 class="team-name">{{ $participation->equipe->nom_equipe }}</h3>
                        </div>

                        @php
                            $joueurs = $participation->equipe->joueurs->where('id_jeu', $tournoi->id_jeu);
                        @endphp

                        @if($joueurs->count() > 0)
                            <div class="players-label">
                                🎯 Joueurs ({{ $joueurs->count() }})
                            </div>
                            <ul class="players-list">
                                @foreach($joueurs as $joueur)
                                    <li class="player-item">
                                        @if($joueur->photo != null)
                                            <img src="{{ asset('images/Joueurs/' . $joueur->photo) }}" 
                                                alt="Photo de {{ $joueur->pseudo }}" 
                                                class="player-photo">
                                        @endif
                                        <span class="player-pseudo">{{ $joueur->pseudo }} <a href="{{ route('joueur.informations', ['id' => $joueur->id]) }}" title="Voir les informations de {{ $joueur->pseudo }}"><i class="fa-solid fa-info-circle"></i></a></span>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p style="color: var(--text-secondary); text-align: center; padding: 1rem;">
                                Aucun joueur pour ce jeu
                            </p>
                        @endif
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <div class="empty-state-icon">👥</div>
                <h3>Aucune équipe inscrite</h3>
                <p>Les inscriptions sont peut-être encore ouvertes !</p>
            </div>
        @endif
        
        <!-- Section commentaires -->
        <h2 class="section-title">
            Commentaires ({{ $tournoi->commentaires->count() }})
        </h2>
        
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="comments-section">
            @foreach($tournoi->commentaires as $commentaire)
                <div class="comment">
                    <p>{{ $commentaire->contenu }}</p>
                    <small>Posté par {{ $commentaire->utilisateur->pseudo }}</small>
                </div>
            @endforeach
        </div>

        <!-- Formulaire d'ajout de commentaire -->
        @if(Auth::check())
            <form action="{{ route('tournoi.ajouterCommentaire', ['id' => $tournoi->id]) }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="contenu">💬 Ajouter un commentaire :</label>
                        <textarea id="contenu" name="contenu" placeholder="Partagez votre avis sur ce tournoi..." required></textarea>
                    </div>
                <input type="hidden" name="id_utilisateur" value="{{ auth()->user()->id }}">
                <button type="submit">📤 Envoyer le commentaire</button>
            </form>
        @else
            <div class="comment-login-prompt">
                <p>🔒 Vous devez être connecté pour commenter</p>
                <a href="{{ route('utilisateur.connexion') }}">Se connecter</a>
            </div>
        @endif
    </main>
@include('Jeux.Footer')