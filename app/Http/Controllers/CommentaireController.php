<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commentaire;
use App\Models\Tournoi;

class CommentaireController extends Controller
{
    public function ajouterCommentaire(Request $request, $id)
    {
        $request->validate([
            'contenu' => 'required|string|max:1000',
            'id_utilisateur' => 'required|exists:utilisateurs,id',
        ]);

        Commentaire::create([
            'contenu' => $request->contenu,
            'id_utilisateur' => $request->id_utilisateur,
            'id_tournoi' => $id,
        ]);

        return redirect()->route('tournois.informations', ['id' => $id])->with('success', 'Commentaire ajouté avec succès');
    }
}
