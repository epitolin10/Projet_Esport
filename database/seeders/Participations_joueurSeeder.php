<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Participation_joueur;

class Participations_joueurSeeder extends Seeder
{
    public function run()
    {
        Participation_joueur::create(['id_tournoi' => 5, 'id_joueur' => 7]);
    }
}
