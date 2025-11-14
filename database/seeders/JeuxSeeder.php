<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JeuxSeeder extends Seeder
{
    public function run()
    {
        Jeux::create(['nom_jeu' => 'The Legend of Zelda: Breath of the Wild', 'editeur' => 'Nintendo', 'categorie' => 'Action-aventure', 'description' => 'Un jeu d\'aventure en monde ouvert acclamé par la critique.', 'image_url' => 'https://example.com/images/zelda_botw.jpg']);
        Jeux::create(['nom_jeu' => 'League of Legends', 'editeur' => 'Riot Games', 'categorie' => 'MOBA', 'description' => 'Un jeu de stratégie en équipe très populaire.', 'image_url' => 'https://example.com/images/lol.jpg']);
        Jeux::create(['nom_jeu' => 'Valorant', 'editeur' => 'Riot Games', 'categorie' => 'FPS', 'description' => 'Un jeu de tir tactique compétitif.', 'image_url' => 'https://example.com/images/valorant.jpg']);
        Jeux::create(['nom_jeu' => 'Overwatch', 'editeur' => 'Blizzard Entertainment', 'categorie' => 'FPS', 'description' => 'Un jeu de tir en équipe avec des héros uniques.', 'image_url' => 'https://example.com/images/overwatch.jpg']);
    }
}
