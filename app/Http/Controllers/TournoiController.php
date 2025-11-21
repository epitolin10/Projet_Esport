<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jeu;
use App\Models\Tournoi;

class TournoiController extends Controller
{
    public function informationtournoi($id)
    {
        $tournoi = Tournoi::findOrFail($id);
        return view('tournois.informations', compact('tournoi'));
    }
}