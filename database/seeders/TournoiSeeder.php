<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournoi;

class TournoiSeeder extends Seeder
{
    public function run()
    {
        Tournoi::create(['nom_tournoi' => 'League of Legends World Championship 2025', 'lieu' => 'Séoul, Corée du sud', 'date_debut' => '2025-10-10', 'date_fin' => '2025-11-10', 'description' => 'Le championnat du monde annuel de League of Legends.', 'id_jeu' => 2]);
        Tournoi::create(['nom_tournoi' => 'DreamHack Summer 2025', 'lieu' => 'Jönköping, Suède', 'date_debut' => '2025-06-15', 'date_fin' => '2025-06-20', 'description' => 'Un festival de jeux vidéo et de sports électroniques avec plusieurs compétitions.', 'id_jeu' => 3]);
        Tournoi::create(['nom_tournoi' => 'Rocket League Championship Series 2025', 'lieu' => 'Los Angeles, États-Unis', 'date_debut' => '2025-08-01', 'date_fin' => '2025-08-05', 'description' => 'Le championnat officiel de Rocket League.', 'id_jeu' => 8]);
        Tournoi::create(['nom_tournoi' => 'Valorant World championship 2025', 'lieu' => 'Paris, France', 'date_debut' => '2025-11-01', 'date_fin' => '2025-11-15', 'description' => 'Le championnat du monde annuel de Valorant.', 'id_jeu' => 3]);
        Tournoi::create(['nom_tournoi' => 'SpeeDons 2025', 'lieu' => 'Paris, France', 'date_debut' => '2025-07-10', 'date_fin' => '2025-07-12', 'description' => 'Un tournoi de speedrun Minecraft', 'id_jeu' => 7]);
    }
}
