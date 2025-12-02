<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
//use Illuminate\Support\Facades\Route;

Route::get('/jeux', [App\Http\Controllers\JeuController::class, 'index'])->name('jeux.index');

Route::get('/jeux/{id}', [App\Http\Controllers\JeuController::class, 'show'])->name('jeux.show');

Route::get('/tournois/{id}', [App\Http\Controllers\TournoiController::class, 'informationtournoi'])->name('tournois.informations');

Route::get('/', [App\Http\Controllers\JeuController::class, 'index'])->name('home');

Route::view('/connexion', 'Jeux.utilisateur.connexion')->name('connexion');

Route::post('/connexion', [App\Http\Controllers\ConnexionController::class, 'Connexion'])->name('utilisateur.connexion');

Route::view('/inscription', 'Jeux.utilisateur.inscription')->name('inscription');

Route::post('/inscription', [App\Http\Controllers\InscriptionController::class, 'Inscription'])->name('utilisateur.inscription');

Route::get('/profil/{id}', [App\Http\Controllers\ProfilController::class, 'profil'])->name('utilisateur.profil');

Route::get('/deconnexion', [App\Http\Controllers\ConnexionController::class, 'Deconnexion'])->name('utilisateur.deconnexion');

Route::post('/jeux/ajouter', [App\Http\Controllers\JeuController::class, 'AjouterJeu'])->name('jeux.ajouter');

Route::post('/tournois/{id}/ajouter-equipe', [App\Http\Controllers\TournoiController::class, 'AjouterEquipeTournoi'])->name('tournois.ajouter_equipe');

Route::get('/equipes', [App\Http\Controllers\EquipeController::class, 'MontrerEquipe'])->name('equipes.show');

Route::post('/equipes/ajouter', [App\Http\Controllers\EquipeController::class, 'AjouterEquipe'])->name('equipes.ajouter');

Route::post('/joueurs/ajouter', [App\Http\Controllers\JoueurController::class, 'AjouterJoueur'])->name('equipes.ajouter_joueur');

Route::post('/jeux/{id}/ajouter-tournoi', [App\Http\Controllers\TournoiController::class, 'CréerTournoi'])->name('jeux.ajouter_tournoi');

Route::post('/tournois/{id}/ajouter-commentaire', [App\Http\Controllers\CommentaireController::class, 'ajouterCommentaire'])->name('tournoi.ajouterCommentaire');

Route::get('/joueur/info/{id}', [App\Http\Controllers\InfoJoueurController::class, 'MontrerInfoJoueur'])->name('joueur.informations');

Route::post('/joueur/info/modifier/{id}', [App\Http\Controllers\InfoJoueurController::class, 'ModifierInfoJoueur'])->name('joueurs.modifier');

Route::get('/force-migrate', function () {
    $output = "<h1>Nettoyage complet et Reset de la Base de Données</h1>";
    
    try {
        // 1. On vide tout (DROP ALL TABLES) et on relance les migrations
        // C'est plus radical et plus propre que refresh
        \Illuminate\Support\Facades\Artisan::call('migrate:fresh', [
            '--seed' => true,   // Relance les seeders immédiatement après
            '--force' => true   // Obligatoire en prod
        ]);
        
        $output .= "✅ Base de données entièrement réinitialisée (migrate:fresh).<br>";
        $output .= "✅ Seeders exécutés (sans doublons).<br>";
        
        // Affiche la sortie console pour confirmation
        $output .= "<pre>" . \Illuminate\Support\Facades\Artisan::output() . "</pre>";

    } catch (\Exception $e) {
        $output .= "❌ ERREUR : " . $e->getMessage();
    }

    return $output;
});
