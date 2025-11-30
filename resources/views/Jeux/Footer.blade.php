    <footer class="site-footer">
        <div class="footer-content">
            <div class="footer-logo">
                <img src="{{ asset('images/logo_site.png') }}" alt="eSport Game Hub Logo" class="footer-logo-img">
            </div>
            
            <div class="footer-links">
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('equipes.show') }}">Équipes</a>
                @if(!Auth::check())
                    <a href="{{ route('utilisateur.connexion') }}">Connexion</a>
                @endif
            </div>

            <div class="footer-social">
                <a href="https://github.com/epitolin10/Projet_Esport" target="_blank" class="social-icon github" title="Voir le projet sur GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; {{ date('Y') }} eSport Game Hub. Tous droits réservés.</p>
            <p class="footer-credits">Développé avec passion pour l'eSport.</p>
        </div>
    </footer>
</body>
</html>