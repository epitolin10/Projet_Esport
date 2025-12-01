@include('Jeux.BarreNavigation')
<div class="container text-center" style="margin-top: 100px; margin-bottom: 100px;">
    <h2>Vous êtes déconnecté(e) avec succès.</h2>
    <a href="{{ route('login') }}" class="btn btn-primary mt-3">Se reconnecter</a>
</div>
@include('Jeux.footer')