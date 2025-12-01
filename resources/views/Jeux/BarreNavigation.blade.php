<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (Route::is('jeux.index') || Route::is('home'))
        <title>Liste des Jeux - eSport Game Hub</title>
    @elseif (Route::is('equipes.show'))
        <title>Les Équipes eSport - eSport Game Hub</title>
    @elseif (Route::is('tournois.informations') && isset($tournoi))
        <title>Informations Tournoi - {{ $tournoi->nom_tournoi }} - eSport Game Hub</title>
    @elseif (Route::is('jeux.show') && isset($jeu))
        <title>Détails du Jeu - {{ $jeu->nom_jeux }} - eSport Game Hub</title>
    @elseif (Route::is('utilisateur.profil') && Auth::check())
        <title>Profil Utilisateur - {{ Auth::user()->pseudo }} - eSport Game Hub</title>
    @elseif (Route::is('utilisateur.connexion') || Route::is('connexion'))
        <title>Connexion - eSport Game Hub</title>
    @elseif (Route::is('utilisateur.inscription') || Route::is('inscription'))
        <title>Inscription - eSport Game Hub</title>
    @else
        <title>eSport Game Hub</title>
    @endif
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
<body>
    <!-- Barre de navigation -->
    <nav>
        <a href="/" class="logo">
            <img src="{{ asset('images/logo_site.png') }}" alt="eSport Game Hub Logo" class="logo-img">
        </a>
        <a href="{{ route('equipes.show') }}" class="btn-equipes">
            👥 Les équipes
        </a>
        @if(Auth::check())
        <a href="{{ route('utilisateur.profil', ['id' => Auth::user()->id]) }}" class="btn-profil">
            👤 Profil
        </a>
        <a href="{{ route('utilisateur.deconnexion') }}" class="btn-deconnexion">
            🚪 Déconnexion
        </a>
        @else
        <a href="{{ route('utilisateur.connexion') }}" class="btn-connexion">
            🔐 Connexion
        </a>
        @endif
    </nav>
