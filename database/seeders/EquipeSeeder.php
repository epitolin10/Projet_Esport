<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipe;

class EquipeSeeder extends Seeder
{
    public function run()
    {
        Equipe::create(['nom_equipe' => 'Karmine Corp', 'tag' => 'KC', 'pays' => 'France', 'logo_url' => 'https://d1fytg1nnnd8c0.cloudfront.net/wp-content/uploads/2021/07/Karmine-Corp-logo.jpg']);
        Equipe::create(['nom_equipe' => 'G2 Esports', 'tag' => 'G2', 'pays' => 'Allemagne', 'logo_url' => 'https://th.bing.com/th/id/R.bf95b44cf2d4ccd9fcb3a12c1f27655c?rik=c%2fHsfGkZ5S5uQA&pid=ImgRaw&r=0']);
        Equipe::create(['nom_equipe' => 'Fnatic', 'tag' => 'FNC', 'pays' => 'Royaume-Uni', 'logo_url' => 'https://tse1.mm.bing.net/th/id/OIP.WwocTLHrHBcUC8URxI8vNQHaHa?rs=1&pid=ImgDetMain&o=7&rm=3']);
        Equipe::create(['nom_equipe' => 'Gentle Mates', 'tag' => 'M8', 'pays' => 'France', 'logo_url' => 'https://media.smartbox.com/pim/1000002822093834687178.jpg?thumbor=400x0']);
        Equipe::create(['nom_equipe' => 'Team Liquid', 'tag' => 'TL', 'pays' => 'États-Unis', 'logo_url' => 'https://tse4.mm.bing.net/th/id/OIP.0hhXe6rx4vv2Enklpt1PsQHaJl?rs=1&pid=ImgDetMain&o=7&rm=3']);
    }
}
