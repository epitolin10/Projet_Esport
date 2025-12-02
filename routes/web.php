<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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
    $output = "<h1>Réparation Forcée de la Base de Données</h1>";
    
    try {
        // 1. Suppression manuelle de la table équipes
        Schema::dropIfExists('equipes');
        $output .= "✅ Table 'equipes' supprimée.<br>";

        // 2. Création MANUELLE de la table (On contourne le fichier de migration)
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_equipe');
            $table->string('tag')->nullable();
            $table->string('pays')->nullable(); // ON FORCE LA COLONNE ICI
            $table->string('logo_url')->nullable();
            $table->timestamps();
        });
        $output .= "✅ Table 'equipes' recréée manuellement (avec colonne 'pays').<br>";

        // 3. On lance les migrations pour le reste (users, jeux, etc.)
        // On utilise --seed pour remplir après
        Artisan::call('migrate', ['--force' => true]);
        $output .= "✅ Autres migrations exécutées.<br>";

        // 4. Lancement des Seeders
        Artisan::call('db:seed', ['--force' => true]);
        $output .= "✅ Seeders exécutés avec succès !<br>";
        
        // 5. Vérification finale
        $columns = Schema::getColumnListing('equipes');
        $output .= "<br><strong>Colonnes actuelles dans la table 'equipes' :</strong> " . implode(', ', $columns);

    } catch (\Exception $e) {
        $output .= "❌ ERREUR : " . $e->getMessage();
    }

    return $output;
});
