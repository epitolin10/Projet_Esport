<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Joueurs;

class JoueurSeeder extends Seeder
{
    public function run()
    {
        Joueurs::create(['pseudo' => 'Saken', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueurs::create(['pseudo' => 'Caps', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueurs::create(['pseudo' => 'riot', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueurs::create(['pseudo' => 'xms', 'id_jeu' => 3, 'id_equipe' => 1]);
        Joueurs::create(['pseudo' => 'TenZ', 'id_jeu' => 3, 'id_equipe' => 3]);
        Joueurs::create(['pseudo' => 'Faker', 'id_jeu' => 2, 'id_equipe' => 5]);
        Joueurs::create(['pseudo' => 'dream', 'id_jeu' => 7, 'id_equipe' => null]);
    }
}
