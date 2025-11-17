<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Participation_equipe;

class Participations_equipeSeeder extends Seeder
{
    public function run()
    {
        Participation_equipe::create(['id_tournoi' => 1, 'id_equipe' => 1]);
        Participation_equipe::create(['id_tournoi' => 1, 'id_equipe' => 2]);
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 3]);
        Participation_equipe::create(['id_tournoi' => 2, 'id_equipe' => 4]);
        Participation_equipe::create(['id_tournoi' => 3, 'id_equipe' => 5]);
        Participation_equipe::create(['id_tournoi' => 3, 'id_equipe' => 4]);
    }
}
