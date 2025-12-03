<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Joueur;
use App\Models\InfoJoueur;

class InfoJoueurController extends Controller
{
    public function MontrerInfoJoueur($id)
    {
        $joueur = Joueur::with('infoJoueur', 'equipe')->findOrFail($id);
        
        return view('Jeux.Joueurs.informations', compact('joueur'));
    }
    public function ModifierInfoJoueur(Request $request, $id)
    {
        $request->validate([
            'lien_x' => 'nullable|url',
            'lien_twitch' => 'nullable|url',
            'lien_youtube' => 'nullable|url',
            'lien_instagram' => 'nullable|url',
            'biographie' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'nationalite' => 'nullable|string',
        ]);

        $infoJoueur = InfoJoueur::updateOrCreate(
            ['id_joueur' => $id],
            [
                'lien_x' => $request->lien_x,
                'lien_twitch' => $request->lien_twitch,
                'lien_youtube' => $request->lien_youtube,
                'lien_instagram' => $request->lien_instagram,
                'biographie' => $request->biographie,
                'date_naissance' => $request->date_naissance,
                'nationalite' => $request->nationalite,
            ]
        );

        return redirect()->route('joueur.informations', ['id' => $id])->with('success', 'Informations du joueur mises à jour avec succès');
    }
}
