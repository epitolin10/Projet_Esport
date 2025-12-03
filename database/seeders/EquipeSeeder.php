<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipe;

class EquipeSeeder extends Seeder
{
    public function run()
    {
        Equipe::create(['nom_equipe' => 'Karmine Corp', 'tag' => 'KC', 'pays' => 'France', 'logo_url' => 'KC.webp']);
        Equipe::create(['nom_equipe' => 'G2 Esports', 'tag' => 'G2', 'pays' => 'Allemagne', 'logo_url' => 'g2-esport.png']);
        Equipe::create(['nom_equipe' => 'Fnatic', 'tag' => 'FNC', 'pays' => 'Royaume-Uni', 'logo_url' => 'Fnatic.png']);
        Equipe::create(['nom_equipe' => 'Gentle Mates', 'tag' => 'M8', 'pays' => 'France', 'logo_url' => 'm8.webp']);
        Equipe::create(['nom_equipe' => 'Team Liquid', 'tag' => 'TL', 'pays' => 'États-Unis', 'logo_url' => 'teamliquid.webp']);
        //pour les joueurs sans équipe
        Equipe::create(['nom_equipe' => 'Sans équipe', 'tag' => null, 'pays' => null, 'logo_url' => null]);
        Equipe::create(['nom_equipe' => 'T1', 'tag' => 'T1', 'pays' => 'Corée du Sud', 'logo_url' => 't1.webp']);
        Equipe::create(['nom_equipe' => 'GenG Esports', 'tag' => 'GEN', 'pays' => 'Corée du Sud', 'logo_url' => 'geng.webp']);
        Equipe::create(['nom_equipe' => 'Team Vitality', 'tag' => 'VIT', 'pays' => 'France', 'logo_url' => 'vitality.png']);
        
        // Nouvelles équipes ajoutées
        Equipe::create(['nom_equipe' => 'Crazy Raccoon', 'tag' => 'CR', 'pays' => 'Japon', 'logo_url' => 'crazyraccoon.png']);
        Equipe::create(['nom_equipe' => 'Spacestation Gaming', 'tag' => 'SSG', 'pays' => 'États-Unis', 'logo_url' => 'spacestation.webp']);
        Equipe::create(['nom_equipe' => 'Team Falcons', 'tag' => 'FLCN', 'pays' => 'Arabie Saoudite', 'logo_url' => 'teamfalcons.png']);
        Equipe::create(['nom_equipe' => 'Team Peps', 'tag' => 'PEPS', 'pays' => 'France', 'logo_url' => 'teampeps.png']);
        Equipe::create(['nom_equipe' => 'Varrel', 'tag' => 'VAR', 'pays' => 'Japon', 'logo_url' => 'varrel.png']);
    }
}
