<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Participation_equipe;

class Participation_equipeSeeder extends Seeder
{
    public function run()
    {
        // Tournoi 1 : Zelda BOTW (Nintendo World Championship 2025)
        Participation_equipe::create(['id_tournoi' => 1, 'id_equipe' => 6]); // Sans équipe

        // Tournoi 2 : LoL (League of Legends World Championship 2025)
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 1]); // KC
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 2]); // G2
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 3]); // Fnatic
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 7]); // T1
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 8]); // GenG
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 5]); // TL

        // Tournoi 3 : CS2 (DreamHack Summer 2025)
        Participation_equipe::create(['id_tournoi' => 3, 'id_equipe' => 9]); // Vitality
        Participation_equipe::create(['id_tournoi' => 3, 'id_equipe' => 12]); // Falcons
        Participation_equipe::create(['id_tournoi' => 3, 'id_equipe' => 2]); // G2
        Participation_equipe::create(['id_tournoi' => 3, 'id_equipe' => 5]); // TL

        // Tournoi 4 : Overwatch 2 (Overwatch Champions series 2025)
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 10]); // Crazy Raccoon
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 12]); // Falcons
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 14]); // Varrel
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 5]); // TL
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 11]); // SSG
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 13]); // Peps
        Participation_equipe::create(['id_tournoi' => 4, 'id_equipe' => 7]); // T1

        // Tournoi 5 : Rocket League (Rocket League Championship Series 2025)
        Participation_equipe::create(['id_tournoi' => 5, 'id_equipe' => 1]); // KC
        Participation_equipe::create(['id_tournoi' => 5, 'id_equipe' => 4]); // M8
        Participation_equipe::create(['id_tournoi' => 5, 'id_equipe' => 9]); // Vitality

        // Tournoi 6 : Valorant (Valorant World championship 2025)
        Participation_equipe::create(['id_tournoi' => 6, 'id_equipe' => 1]); // KC
        Participation_equipe::create(['id_tournoi' => 6, 'id_equipe' => 2]); // G2
        Participation_equipe::create(['id_tournoi' => 6, 'id_equipe' => 3]); // Fnatic
        Participation_equipe::create(['id_tournoi' => 6, 'id_equipe' => 4]); // M8
        Participation_equipe::create(['id_tournoi' => 6, 'id_equipe' => 5]); // TL

        // Tournoi 7 : Minecraft (SpeeDons 2025)
        Participation_equipe::create(['id_tournoi' => 7, 'id_equipe' => 6]); // Sans équipe

        // Tournoi 8 : Pokemon Champions (Pokemon World Championship 2026)
        Participation_equipe::create(['id_tournoi' => 8, 'id_equipe' => 6]); // Sans équipe
    }
}
