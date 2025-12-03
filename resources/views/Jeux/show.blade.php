@include('Jeux.BarreNavigation')
@if(Auth::check() && Auth::user()->role === 'admin')
    <!-- Section Admin DANS le container -->
    <div class="container">
        <div class="admin-section">
            <div class="admin-header">
                <h2 class="admin-title">
                    ⚙️ Panneau d'Administration
                </h2>
                <p class="admin-subtitle">Ajouter un tournoi à la plateforme</p>
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

                <form action="{{ route('jeux.ajouter_tournoi', ['id' => $jeux->id]) }}" method="POST" enctype="multipart/form-data" class="admin-form">
                    @csrf
                    
                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="nom_tournoi">Nom du tournoi</label>
                            <input type="text" id="nom_tournoi" name="nom_tournoi" placeholder="Ex: World Championship" required>
                        </div>

                        <div class="form-group-admin">
                            <label for="lieu">Lieu</label>
                            <input type="text" id="lieu" name="lieu" placeholder="Ex: Paris" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group-admin">
                            <label for="date_debut">Date de début</label>
                            <input type="date" id="date_debut" name="date_debut" placeholder="Ex: 01/01/2024" required>
                        </div>

                        <div class="form-group-admin">
                            <label for="date_fin">Date de fin</label>
                            <input type="date" id="date_fin" name="date_fin" placeholder="Ex: 10/01/2024" required>
                        </div>

                        <div class="form-group-admin">
                            <label for="description">Description</label>
                            <input type="text" id="description" name="description" placeholder="Description du tournoi" required>
                        </div>
                    </div>

                    <button type="submit" class="btn-ajouter">
                        ✨ Ajouter le Tournoi
                    </button>
                </form>
            </div>
        </div>
    </div>
@endif

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
@include('Jeux.Footer')
