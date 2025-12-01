<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tournoi;

class TournoiSeeder extends Seeder
{
    public function run()
    {
        // Imaginaire (Pas de date confirmée)
        Tournoi::create(['nom_tournoi' => 'Nintendo World Championship 2025', 'lieu' => 'Tokyo, Japon', 'date_debut' => '2025-09-15', 'date_fin' => '2025-09-20', 'description' => "Le championnat du monde annuel de Nintendo.", 'id_jeu' => 1]);
        
        // Réel : Worlds 2025 à Chengdu
        Tournoi::create(['nom_tournoi' => 'League of Legends World Championship 2025', 'lieu' => 'Chengdu, Chine', 'date_debut' => '2025-10-14', 'date_fin' => '2025-11-08', 'description' => 'Le championnat du monde annuel de League of Legends.', 'id_jeu' => 2]);
        
        // Réel : DreamHack Summer
        Tournoi::create(['nom_tournoi' => 'DreamHack Summer 2025', 'lieu' => 'Jönköping, Suède', 'date_debut' => '2025-06-13', 'date_fin' => '2025-06-16', 'description' => 'Un festival de jeux vidéo et de sports électroniques avec plusieurs compétitions.', 'id_jeu' => 5]);
        
        // Réel : OWCS Finals à Stockholm
        Tournoi::create(['nom_tournoi' => 'Overwatch Champions Series 2025', 'lieu' => 'Stockholm, Suède', 'date_debut' => '2025-11-28', 'date_fin' => '2025-11-30', 'description' => "Les finales mondiales officielles d'Overwatch.", 'id_jeu' => 4]);
        
        // Réel : RLCS World Championship à Lyon
        Tournoi::create(['nom_tournoi' => 'Rocket League Championship Series 2025', 'lieu' => 'Lyon, France', 'date_debut' => '2025-09-12', 'date_fin' => '2025-09-14', 'description' => 'Le championnat du monde officiel de Rocket League.', 'id_jeu' => 7]);
        
        // Réel : Valorant Champions à Paris
        Tournoi::create(['nom_tournoi' => 'Valorant Champions 2025', 'lieu' => 'Paris, France', 'date_debut' => '2025-09-12', 'date_fin' => '2025-10-05', 'description' => 'Le championnat du monde annuel de Valorant.', 'id_jeu' => 3]);
        
        // Réel : SpeeDons à Lyon
        Tournoi::create(['nom_tournoi' => 'SpeeDons 2025', 'lieu' => 'Lyon, France', 'date_debut' => '2025-02-27', 'date_fin' => '2025-03-02', 'description' => 'Un marathon de speedrun caritatif sur Minecraft et autres jeux.', 'id_jeu' => 6]);

        Tournoi::create(['nom_tournoi' => 'Pokemon World Championship 2026', 'lieu' => 'San Francisco, USA', 'date_debut' => '2026-08-15', 'date_fin' => '2026-08-20', 'description' => 'Le championnat du monde annuel de Pokémon.', 'id_jeu' => 9]);
    }
}
