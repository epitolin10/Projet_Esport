<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipe;
use App\Models\Joueur;
use App\Models\Jeu;

class JoueurController extends Controller
{
    public function AjouterJoueur(Request $request)
    {
        $request->validate([
            'pseudo' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'id_jeu' => 'required|exists:jeux,id',
            'id_equipe' => 'required|exists:equipes,id',
        ]);
        $imagepath = null;
        if ($request->hasFile('photo')) {
            $imageName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('images/Joueurs'), $imageName);
            $imagepath = $imageName;
        }

        Joueur::create([
            'pseudo' => $request->pseudo,
            'photo' => $imagepath,
            'id_jeu' => $request->id_jeu,
            'id_equipe' => $request->id_equipe,
        ]);

        return redirect()->route('equipes.show')->with('success', "Joueur ajouté avec succès");
    }
}