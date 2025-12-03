<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Tournoi;

class JeuController extends Controller
{
    public function index()
    {
        $Jeux = Jeu::All();
        return view('Jeux.index', compact('Jeux'));
    }
    // Affiche les tournois du jeu en question
    public function show($id)
    {
        $jeux = Jeu::with('tournois')->findOrFail($id);
        $tournois = $Jeux->tournois;
        return view('Jeux.show', compact('Jeux', 'tournois'));
    }
    public function AjouterJeu(Request $request)
    {
        $request->validate(['nom_jeux' => 'required', 'editeur' => 'required', 'categorie' => 'required', 'description' => 'required', 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp']);
        
        $imageName = $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('images/Jeux'), $imageName);
        
        Jeu::create([
            'nom_jeux' => $request->nom_jeux,
            'editeur' => $request->editeur,
            'categorie' => $request->categorie,
            'description' => $request->description,
            'image_url' => $imageName,
        ]);
        
        return redirect()->route('jeux.index')->with('success', 'Jeu ajouté avec succès');
    }

}
