@include('Jeux.BarreNavigation')
@if(Auth::check() && Auth::user()->role === 'admin')
    <!-- Section Admin DANS le container -->
    <div class="container">
        <div class="admin-section">
            <div class="admin-header">
                <h2 class="admin-title">
                    ⚙️ Panneau d'Administration
                </h2>
                <p class="admin-subtitle">Modifier les informations du joueur</p>
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

                <form action="{{ route('joueurs.modifier', ['id' => $joueur->id]) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="biographie">Biographie</label>
                            <input type="text" id="biographie" name="biographie" placeholder="Ex: Joueur professionnel de League of Legends">
                        </div>

                        <div class="form-group-admin">
                            <label for="nationalite">Nationalité</label>
                            <input type="text" id="nationalite" name="nationalite" placeholder="Ex: France">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="lien_x">Lien X</label>
                            <input type="text" id="lien_x" name="lien_x" placeholder="Ex: https://twitter.com/joueur">
                        </div>

                        <div class="form-group-admin">
                            <label for="lien_twitch">Lien Twitch</label>
                            <input type="text" id="lien_twitch" name="lien_twitch" placeholder="Ex: https://twitch.tv/joueur">
                        </div>

                        <div class="form-group-admin">
                            <label for="lien_youtube">Lien YouTube</label>
                            <input type="text" id="lien_youtube" name="lien_youtube" placeholder="Ex: https://youtube.com/joueur">
                        </div>
                        <div class="form-group-admin">
                            <label for="lien_instagram">Lien Instagram</label>
                            <input type="text" id="lien_instagram" name="lien_instagram" placeholder="Ex: https://instagram.com/joueur">
                    </div>

                    <button type="submit" class="btn-ajouter">
                        ✨ Modifier les Informations
                    </button>
                </form>
            </div>
        </div>
    </div>
@endif
<div class="container">
    <div class="player-profile">
        <div class="player-header">
            @if($joueur->photo)
                <img src="{{ asset('images/Joueurs/' . $joueur->photo) }}" alt="{{ $joueur->pseudo }}" class="player-avatar">
            @else
                <div class="player-avatar-placeholder">{{ substr($joueur->pseudo, 0, 1) }}</div>
            @endif
            <h1 class="player-name">{{ $joueur->pseudo }}</h1>
            @if($joueur->equipe)
                <p class="player-team">Équipe : {{ $joueur->equipe->nom_equipe }}</p>
            @endif
        </div>

        <div class="player-info-content">
            @if($joueur->infoJoueur)
                <div class="player-bio">
                    <h2><i class="fa-solid fa-book-open"></i> Biographie</h2>
                    <p>{{ $joueur->infoJoueur->biographie ?? 'Aucune biographie disponible.' }}</p>
                </div>

                <div class="player-socials">
                    <h2><i class="fa-solid fa-share-nodes"></i> Réseaux Sociaux</h2>
                    <div class="social-links">
                        @if($joueur->infoJoueur->lien_x)
                            <a href="{{ $joueur->infoJoueur->lien_x }}" target="_blank" class="social-link x-twitter" title="X (Twitter)">
                                <i class="fa-brands fa-x-twitter"></i>
                            </a>
                        @endif

                        @if($joueur->infoJoueur->lien_twitch)
                            <a href="{{ $joueur->infoJoueur->lien_twitch }}" target="_blank" class="social-link twitch" title="Twitch">
                                <i class="fa-brands fa-twitch"></i>
                            </a>
                        @endif

                        @if($joueur->infoJoueur->lien_youtube)
                            <a href="{{ $joueur->infoJoueur->lien_youtube }}" target="_blank" class="social-link youtube" title="YouTube">
                                <i class="fa-brands fa-youtube"></i>
                            </a>
                        @endif

                        @if($joueur->infoJoueur->lien_instagram)
                            <a href="{{ $joueur->infoJoueur->lien_instagram }}" target="_blank" class="social-link instagram" title="Instagram">
                                <i class="fa-brands fa-instagram"></i>
                            </a>
                        @endif
                    </div>
                    
                    @if(!$joueur->infoJoueur->lien_x && !$joueur->infoJoueur->lien_twitch && !$joueur->infoJoueur->lien_youtube && !$joueur->infoJoueur->lien_instagram)
                        <p style="text-align: center; color: var(--text-secondary); margin-top: 1rem;">Ce joueur n'a pas encore renseigné ses réseaux sociaux.</p>
                    @endif
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-state-icon">❓</div>
                    <p>Aucune information supplémentaire disponible pour ce joueur.</p>
                </div>
            @endif
        </div>
        
        <div style="text-align: center; margin-top: 3rem;">
            <a href="{{ url()->previous() }}" class="btn-back" style="display: inline-block;">
                <i class="fa-solid fa-arrow-left"></i> Retour
            </a>
        </div>
    </div>
</div>

@include('Jeux.Footer')
