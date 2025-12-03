@include('Jeux.BarreNavigation')
<div class="login-wrapper">
        <div class="login-container">
            <!-- En-tête -->
            <div class="login-header">
                <div class="login-icon">🔐</div>
                <h1 class="login-title">Connexion</h1>
                <p class="login-subtitle">Accédez à votre espace eSport</p>
            </div>

            <!-- Messages d'erreur (si présents) -->
            @if($errors->any())
                <div class="error-message">
                    <strong>⚠️ Erreur de connexion</strong>
                    <ul style="margin: 0.5rem 0 0 0; padding-left: 1.5rem;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Formulaire de connexion -->
            <form action="{{ route('utilisateur.connexion') }}" method="POST" class="connexion-form">
                @csrf
                
                <div class="form-group">
                    <label for="login">📧 Email ou Pseudo</label>
                    <input 
                        type="text" 
                        id="login" 
                        name="login" 
                        placeholder="votreemail@exemple.com"
                        value="{{ old('login') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password">🔒 Mot de passe</label>
                    <input 
                        type="password" 
                        id="password" 
                        name="password" 
                        placeholder="••••••••"
                        required
                    >
                </div>

                <div class="checkbox-group">
                    <input type="checkbox" id="remember" name="remember">
                    <label for="remember">Se souvenir de moi</label>
                </div>

                <button type="submit" class="btn-submit">
                    Se connecter ⚡
                </button>
            </form>

            <!-- Liens utiles -->
            <div class="form-links">
                <a href="/mot-de-passe-oublie" class="form-link">Mot de passe oublié ?</a>
            </div>
            <div class="signup-prompt">
                Pas encore de compte ? 
                <a href="/inscription">Créer un compte</a>
            </div>
        </div>
    </div>
@include('Jeux.Footer')