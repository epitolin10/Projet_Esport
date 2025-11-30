<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Jeu;

class EquipeController extends Controller
{
    public function MontrerEquipe()
    {
        $equipes = Equipe::all();
        $joueurs = Joueur::all();
        $jeux = Jeu::all();
        return view('Jeux.equipes.show', compact('equipes', 'joueurs', 'jeux'));
    }
    public function ListeJoueurs($id)
    {
        // on affiche Les Joueurs de l'équipe dans la vue montrer équipe
        $equipe = Equipe::with('joueurs')->findOrFail($id);
        $joueurs = $equipe->joueurs;
        return view('Jeux.equipes.show', compact('joueurs'));
    }
    public function AjouterEquipe(Request $request)
    {
        $request->validate([
            'nom_equipe' => 'required',
            'tag' => 'required',
            'Pays' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images/logo_équipes'), $imageName);

        Equipe::create([
            'nom_equipe' => $request->nom_equipe,
            'tag' => $request->tag,
            'Pays' => $request->Pays,
            'logo_url' => $imageName,
        ]);

        return redirect()->route('equipes.show')->with('success', "Équipe ajoutée avec succès");
    }
}