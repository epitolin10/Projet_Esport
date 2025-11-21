<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Joueur;

class JoueurSeeder extends Seeder
{
    public function run()
    {
        Joueur::create(['pseudo' => 'Saken', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Caps', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'riot', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'xms', 'id_jeu' => 3, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'TenZ', 'id_jeu' => 3, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Faker', 'id_jeu' => 2, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'dream', 'id_jeu' => 7, 'id_equipe' => null]);
    }
}
