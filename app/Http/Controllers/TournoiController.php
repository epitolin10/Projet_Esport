<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Tournoi;
use App\Models\Equipe;

class TournoiController extends Controller
{
    public function informationtournoi($id)
    {
        $tournoi = Tournoi::findOrFail($id);
        $equipes = Equipe::all();
        return view('Jeux.tournois.informations', compact('tournoi', 'equipes'));
    }
    public function ListEquipes($id)
    {
        // On affiche les équipes participant au tournoi dans la vue informations du tournoi
        $tournoi = Tournoi::with('equipes')->findOrFail($id);
        $equipes = $tournoi->equipes;
        return view('Jeux.tournois.informations', compact('equipes'));
    }
    public function ListJoueurs($id)
    {
        // on affiche Les Joueurs des équipes du jeu participant au tournoi dans la vue informations du tournoi
        $tournoi = Tournoi::with('joueurs.equipes')->findOrFail($id);
        $equipes = $tournoi->equipes;
        return view('Jeux.tournois.informations', compact('equipes'));
    }
    public function CréerTournoi(Request $request, $id)
    {
        $request->validate([
            'nom_tournoi' => 'required',
            'lieu' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'description' => 'required',
        ]);

        Tournoi::create([
            'nom_tournoi' => $request->nom_tournoi,
            'lieu' => $request->lieu,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'description' => $request->description,
            'id_jeu' => $id,
        ]);

        return redirect()->route('jeux.show', ['id' => $id])->with('success', 'Tournoi ajouté avec succès');
    }
    public function AjouterEquipeTournoi(Request $request, $id)
    {
        $request->validate([
            'id_equipe' => 'required|exists:equipes,id',
        ]);

        $tournoi = Tournoi::findOrFail($id);

        // Vérifier si l'équipe est déjà inscrite au tournoi
        if ($tournoi->equipes()->where('equipes.id', $request->id_equipe)->exists()) {
            return redirect()->back()->withErrors(['id_equipe' => 'Cette équipe est déjà inscrite à ce tournoi.']);
        }

        $tournoi->equipes()->attach($request->id_equipe);
        return redirect()->route('tournois.informations', ['id' => $id])->with('success', 'Équipe ajoutée au tournoi avec succès');
    }
}