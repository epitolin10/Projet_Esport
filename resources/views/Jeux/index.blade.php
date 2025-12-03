@include('Jeux.BarreNavigation')

@if(Auth::check() && Auth::user()->role === 'admin')
    <!-- Section Admin DANS le container -->
    <div class="container">
        <div class="admin-section">
            <div class="admin-header">
                <h2 class="admin-title">
                    ⚙️ Panneau d'Administration
                </h2>
                <p class="admin-subtitle">Ajouter un nouveau jeu à la plateforme</p>
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

                <form action="{{ route('Jeux.ajouter') }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="nom_jeux">🎮 Nom du Jeu</label>
                            <input type="text" id="nom_jeux" name="nom_jeux" placeholder="Ex: League of Legends" required>
                        </div>

                        <div class="form-group-admin">
                            <label for="editeur">🏢 Éditeur</label>
                            <input type="text" id="editeur" name="editeur" placeholder="Ex: Riot Games" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="categorie">📂 Catégorie</label>
                            <input type="text" id="categorie" name="categorie" placeholder="Ex: MOBA, FPS, Battle Royale..." required>
                        </div>

                        <div class="form-group-admin">
                            <label for="image">🖼️ Image du Jeu</label>
                            <input type="file" id="image" name="image" accept="image/png, image/jpeg, image/jpg, image/gif, image/svg+xml, image/webp" required>
                            <small>Format accepté: JPG, PNG, GIF, WEBP (Max 2MB)</small>
                        </div>
                    </div>

                    <div class="form-group-admin full-width">
                        <label for="description">📝 Description</label>
                        <textarea id="description" name="description" rows="4" placeholder="Décrivez le jeu et ses caractéristiques compétitives..." required></textarea>
                    </div>

                    <button type="submit" class="btn-ajouter">
                        ✨ Ajouter le Jeu
                    </button>
                </form>
            </div>
        </div>
    </div>
@endif

<!-- Contenu principal -->
<div class="container">
    @if(session('success'))
        <div class="alert alert-success" style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
            ✅ {{ session('success') }}
        </div>
    @endif

    <h1>Bienvenue dans Esport Game Hub</h1>
    <h2>Voici la liste des jeux eSportifs disponibles :</h2>

    <!-- Grille de jeux -->
    <div class="games-grid">
        @foreach ($Jeux as $jeu)
            <div class="game-card">
                <img src="{{ asset('images/Jeux/' . $jeu->image_url) }}" alt="{{ $jeu->nom_jeux }}" class="game-image">
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

@include('Jeux.Footer')
