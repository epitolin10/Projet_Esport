@include('Jeux.BarreNavigation')
@if(Auth::check() && Auth::user()->role === 'admin')
    <!-- Section Admin DANS le container -->
    <div class="container">
        <div class="admin-section">
            <div class="admin-header">
                <h2 class="admin-title">
                    ⚙️ Panneau d'Administration Equipe
                </h2>
                <p class="admin-subtitle">Ajouter une nouvelle équipe à la plateforme</p>
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

                <form action="{{ route('equipes.ajouter') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="nom_equipe">Nom de l'équipe</label>
                            <input type="text" id="nom_equipe" name="nom_equipe" placeholder="Ex: Karmine Corp" required>
                        </div>

                        <div class="form-group-admin">
                            <label for="tag">tag</label>
                            <input type="text" id="tag" name="tag" placeholder="Ex: KC" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="pays">Pays</label>
                            <input type="text" id="pays" name="pays" placeholder="Ex: France, USA, Corée..." required>
                        </div>

                        <div class="form-group-admin">
                            <label for="image">🖼️ Image de l'équipe</label>
                            <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg, image/gif, image/svg+xml, image/webp" required>
                            <small>Format accepté: JPG, PNG, GIF, WEBP (Max 2MB)</small>
                        </div>
                    </div>

                    <button type="submit" class="btn-ajouter">
                        ✨ Ajouter l'équipe
                    </button>
                </form>
            </div>
        </div>
    </div>
@endif
@if(Auth::check() && Auth::user()->role === 'admin')
    <!-- Section Admin DANS le container -->
    <div class="container">
        <div class="admin-section">
            <div class="admin-header">
                <h2 class="admin-title">
                    ⚙️ Panneau d'Administration Joueur
                </h2>
                <p class="admin-subtitle">Ajouter un nouveau joueur à la plateforme</p>
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
                <form action="{{ route('equipes.ajouter_joueur') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" id="pseudo" name="pseudo" placeholder="Ex: Faker" required>
                        </div>

                        <div class="form-group-admin">
                            <label for="id_equipe">👥 Nom de l'équipe</label>
                            <select id="id_equipe" name="id_equipe" required>
                                <option value="" disabled selected>Choisir une équipe</option>
                                @foreach($equipes as $equipe)
                                    <option value="{{ $equipe->id }}">{{ $equipe->nom_equipe }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group-admin">
                            <label for="id_jeu">Jeu spécialisé</label>
                            <select id="id_jeu" name="id_jeu" required>
                                <option value="" disabled selected>Choisir un jeu</option>
                                @foreach($jeux as $jeu)
                                    <option value="{{ $jeu->id }}">{{ $jeu->nom_jeux }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group-admin">
                            <label for="photo">🖼️ Photo du joueur</label>
                            <input type="file" id="photo" name="photo" accept="image/png, image/jpeg, image/jpg, image/gif, image/svg+xml, image/webp" required>
                            <small>Format accepté: JPG, PNG, GIF, WEBP (Max 2MB)</small>
                        </div>
                    </div>

                    <button type="submit" class="btn-ajouter">
                        ✨ Ajouter le Joueur
                    </button>
                </form>
            </div>
        </div>
    </div>
@endif
<div class="container">
    <h1>Les Équipes eSport</h1>
    <h2>Découvrez toutes les équipes et leurs joueurs</h2>

    @if($equipes->count() > 0)
        <div class="teams-grid">
            @foreach($equipes as $equipe)
                <div class="team-card">
                    <div class="team-header">
                        @if ($equipe->id != 6)
                            <img src="{{ asset('images/logo_equipes/' . $equipe->logo_url) }}"
                            alt="Logo {{ $equipe->nom_equipe }}" 
                            class="team-logo">
                        @endif
                        <h3 class="team-name">{{ $equipe->nom_equipe }}</h3>
                    </div>

                    @php
                        $joueurs = $equipe->joueurs;
                    @endphp

                    @if($joueurs->count() > 0)
                        <div class="players-section">
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
                                        <div class="player-info">
                                            <span class="player-pseudo">
                                                {{ $joueur->pseudo }} 
                                                <a href="{{ route('joueur.informations', ['id' => $joueur->id]) }}" title="Voir les informations de {{ $joueur->pseudo }}" style="color: var(--primary); margin-left: 5px;">
                                                    <i class="fa-solid fa-circle-info"></i>
                                                </a>
                                            </span>
                                            @if(isset($joueur->jeu))
                                                <span class="player-game">{{ $joueur->jeu->nom_jeux }}</span>
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @else
                        <div class="no-players">
                            <span class="no-players-icon">😔</span>
                            <p>Aucun joueur dans cette équipe</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <div class="empty-state-icon">👥</div>
            <h3>Aucune équipe disponible</h3>
            <p>Les équipes seront bientôt ajoutées !</p>
        </div>
    @endif
</div>

@include('Jeux.Footer')