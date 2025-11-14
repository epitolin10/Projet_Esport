<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipesSeeder extends Seeder
{
    public function run()
    {
        Equipes::create(['nom_equipe' => 'Karmine Corp', 'tag' => 'KC', 'pays' => 'France', 'logo_url' => 'https://example.com/images/karmine_corp.jpg']);
        Equipes::create(['nom_equipe' => 'G2 Esports', 'tag' => 'G2', 'pays' => 'Allemagne', 'logo_url' => 'https://example.com/images/g2_esports.jpg']);
        Equipes::create(['nom_equipe' => 'Fnatic', 'tag' => 'FNC', 'pays' => 'Royaume-Uni', 'logo_url' => 'https://example.com/images/fnatic.jpg']);
        Equipes::create(['nom_equipe' => 'Team Liquid', 'tag' => 'TL', 'pays' => 'États-Unis', 'logo_url' => 'https://example.com/images/team_liquid.jpg']);
        Equipes::create(['nom_equipe' => 'T1', 'tag' => 'T1', 'pays' => 'Corée du Sud', 'logo_url' => 'https://example.com/images/t1.jpg']);
        Equipes::create(['nom_equipe' => 'Cloud9', 'tag' => 'C9', 'pays' => 'États-Unis', 'logo_url' => 'https://example.com/images/cloud9.jpg']);
    }
}
