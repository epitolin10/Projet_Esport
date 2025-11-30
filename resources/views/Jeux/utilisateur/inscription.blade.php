@include('Jeux.BarreNavigation')
<div class="login-wrapper">
        <div class="login-container">
            <!-- En-tête -->
            <div class="login-header">
                <div class="login-icon">📝</div>
                <h1 class="login-title">Inscription</h1>
                <p class="login-subtitle">Créez votre compte eSport</p>
            </div>

            <!-- Messages de succès/erreur -->
            @if(session('success'))
                <div class="alert alert-success" style="color: #155724; background-color: #d4edda; border-color: #c3e6cb; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger" style="color: #721c24; background-color: #f8d7da; border-color: #f5c6cb; padding: 10px; margin-bottom: 15px; border-radius: 5px;">
                    ⚠️ <strong>Oups ! Il y a eu des problèmes avec votre inscription :</strong>
                    <ul style="margin-top: 5px; margin-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            
            <form action="{{ route('utilisateur.inscription') }}" method="POST" class="inscription-form">
                @csrf
                
                <div class="form-group">
                    <label for="pseudo">👤 Pseudo</label>
                    <input 
                        type="text" 
                        id="pseudo" 
                        name="pseudo" 
                        placeholder="Votre pseudo"
                        value="{{ old('pseudo') }}"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="email">📧 Email</label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="votreemail@exemple.com"
                        value="{{ old('email') }}"
                        required
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
                <div class="form-group">
                    <label for="password_confirmation">🔒 Confirmer le mot de passe</label>
                    <input 
                        type="password" 
                        id="password_confirmation" 
                        name="password_confirmation" 
                        placeholder="••••••••"
                        required
                    >
                </div>
                <button type="submit" class="btn-submit">
                    S'inscrire 🚀
                </button>
            </form>

            <div class="login-links">
                <span>Vous avez déjà un compte ?</span>
                <a href="/connexion">Se connecter</a>
            </div>
        </div>
    </div>
<div>
@include('Jeux.Footer')