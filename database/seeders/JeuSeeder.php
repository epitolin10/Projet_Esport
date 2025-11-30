<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jeu;

class JeuSeeder extends Seeder
{
    public function run()
    {
        Jeu::create(['nom_jeux' => 'The Legend of Zelda: Breath of the Wild', 'editeur' => 'Nintendo', 'categorie' => 'Action-aventure', 'description' => 'Un jeu d\'aventure en monde ouvert acclamé par la critique.', 'image_url' => 'zeldaBOTW.webp']);
        Jeu::create(['nom_jeux' => 'League of Legends', 'editeur' => 'Riot Games', 'categorie' => 'MOBA', 'description' => 'Un jeu de stratégie en équipe très populaire.', 'image_url' => 'Lol.webp']);
        Jeu::create(['nom_jeux' => 'Valorant', 'editeur' => 'Riot Games', 'categorie' => 'FPS', 'description' => 'Un jeu de tir tactique compétitif.', 'image_url' => 'valorant.jpg']);
        Jeu::create(['nom_jeux' => 'Overwatch 2', 'editeur' => 'Blizzard Entertainment', 'categorie' => 'FPS', 'description' => 'Un jeu de tir en équipe avec des héros uniques.', 'image_url' => 'overwatch2.webp']);
        Jeu::create(['nom_jeux' => 'Counter-Strike: Global Offensive 2', 'editeur' => 'Valve Corporation', 'categorie' => 'FPS', 'description' => 'Un jeu de tir à la première personne compétitif.', 'image_url' => 'cs2.webp']);
        Jeu::create(['nom_jeux' => 'Minecraft', 'editeur' => 'Mojang Studios', 'categorie' => 'Sandbox', 'description' => 'Un jeu de construction et d\'aventure en monde ouvert.', 'image_url' => 'minecraft.jpg']);
        Jeu::create(['nom_jeux' => 'Rocket League', 'editeur' => 'Psyonix', 'categorie' => 'Sport/Action', 'description' => 'Un jeu de football avec des voitures propulsées par des fusées.', 'image_url' => 'RocketLeague.webp']);
        Jeu::create(['nom_jeux' => 'Battlefield 6', 'editeur' => 'Electronic Arts', 'categorie' => 'FPS', 'description' => 'Un jeu de tir à la première personne axé sur les combats à grande échelle.', 'image_url' => 'battlefield-6-standard-edition-16x9.jpg']);
        Jeu::create(['nom_jeux' => 'Pokemon Champions', 'editeur' => 'Nintendo', 'categorie' => 'RPG', 'description' => 'Le nouveau jeu de la série Pokémon concentré sur les combats stratégiques. ', 'image_url' => 'pokemonchampions.jpg']);
    }   
}
