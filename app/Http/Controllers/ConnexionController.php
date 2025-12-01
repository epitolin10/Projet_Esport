<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Import de la façade Auth
use App\Models\Utilisateur;

class ConnexionController extends Controller
{
    public function Connexion(Request $request)
    {
        // Validation des données
        $credentials = $request->validate([
            'login' => 'required', // Champ unique pour pseudo ou email
            'password' => 'required',
        ]);

        // Récupérer la valeur de la case à cocher "Se souvenir de moi"
        $remember = $request->has('remember');

        $loginType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'pseudo';

        // Tentative de connexion via Auth
        // Auth::attempt hache automatiquement le mot de passe pour le comparer
        if (Auth::attempt([$loginType => $request->login, 'password' => $request->password], $remember)) {
            $request->session()->regenerate();

            return redirect()->route('home')->with('success', 'Connexion réussie');
        }

        return back()->withErrors([
            'login' => 'Pseudo/Email ou mot de passe incorrect',
        ])->onlyInput('login');
    }

    public function Deconnexion(Request $request)
    {
        Auth::logout(); // Déconnexion via Auth

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home')->with('success', 'Déconnexion réussie');
    }
}