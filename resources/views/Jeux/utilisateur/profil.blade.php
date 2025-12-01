@include('Jeux.BarreNavigation')

<div class="container profile-container">
    <div class="profile-header">
        <div class="profile-avatar">
            👤
        </div>
        <div class="profile-info">
            <h1>{{ $utilisateur->pseudo }}</h1>
            <span class="profile-badge">
                {{ ucfirst($utilisateur->role ?? 'Membre') }}
            </span>
            <p class="profile-date">
                Membre depuis le {{ $utilisateur->created_at->format('d/m/Y') }}
            </p>
        </div>
        <div class="profile-actions">
            @if(Auth::check() && Auth::id() === $utilisateur->id)
                <a href="{{ route('utilisateur.deconnexion') }}" class="btn-logout">
                    🚪 Déconnexion
                </a>
            @endif
        </div>
    </div>

    <div class="profile-content">
        <!-- Informations personnelles -->
        <div class="profile-card">
            <h3 class="card-title">Informations</h3>
            <div class="info-group">
                <label>📧 Email</label>
                <div class="info-value">{{ $utilisateur->email }}</div>
            </div>
            <div class="info-group">
                <label>⚡ Statut</label>
                <div class="info-value">Actif ✅</div>
            </div>
        </div>

        <!-- Activité récente -->
        <div class="profile-card activity-card">
            <h3 class="card-title">💬 Derniers Commentaires</h3>
            
            @if($utilisateur->commentaires && $utilisateur->commentaires->count() > 0)
                <div class="activity-list">
                    @foreach($utilisateur->commentaires->sortByDesc('created_at')->take(5) as $commentaire)
                        <div class="activity-item">
                            <div class="activity-meta">
                                Sur <a href="{{ route('tournois.informations', $commentaire->tournoi->id) }}">
                                    {{ $commentaire->tournoi->nom_tournoi }}
                                </a>
                                • {{ $commentaire->created_at->diffForHumans() }}
                            </div>
                            <div class="activity-content">
                                "{{ Str::limit($commentaire->contenu, 100) }}"
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-state-icon">📝</div>
                    <p>Aucune activité récente pour le moment.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@include('Jeux.Footer')