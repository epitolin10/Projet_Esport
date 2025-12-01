<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;

class ProfilController extends Controller
{
    public function profil($id)
    {
        // Récupération de l'utilisateur par son ID
        $utilisateur = Utilisateur::find($id);

        // Vérification si l'utilisateur existe
        if (!$utilisateur) {
            return redirect()->route('home')->with('error', 'Utilisateur non trouvé');
        }

        // Retourner la vue du profil avec les données de l'utilisateur
        return view('Jeux.utilisateur.profil', ['utilisateur' => $utilisateur]);
    }
}