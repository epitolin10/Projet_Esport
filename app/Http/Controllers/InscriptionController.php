<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import de la façade Auth
use App\Models\Utilisateur;
use Hash;

Class InscriptionController extends Controller
{
    public function Inscription(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'pseudo' => 'required|unique:utilisateurs,pseudo|max:50',
            'email' => 'required|email|unique:utilisateurs,email|max:100',
            'password' => 'required|min:6|confirmed',
        ]);

        // Création de l'utilisateur
        $utilisateur = new Utilisateur();
        $utilisateur->pseudo = $validatedData['pseudo'];
        $utilisateur->email = $validatedData['email'];
        $utilisateur->password = Hash::make($validatedData['password']); // Hachage du mot de passe
        $utilisateur->save();

        // Connexion automatique après inscription
        Auth::login($utilisateur);

        return redirect()->route('home')->with('success', 'Inscription réussie et connecté');
    }
}