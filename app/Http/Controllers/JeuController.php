<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Tournoi;

class JeuController extends Controller
{
    public function index()
    {
        $jeux = Jeu::All();
        return view('jeux.index', compact('jeux'));
    }
    // Affiche les tournois du jeu en question
    public function show($id)
    {
        $jeux = Jeu::with('tournois')->findOrFail($id);
        $tournois = $jeux->tournois;
        return view('jeux.show', compact('jeux', 'tournois'));
    }

}
