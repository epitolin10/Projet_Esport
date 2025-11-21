<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Jeu;

class JeuSeeder extends Seeder
{
    public function run()
    {
        Jeu::create(['nom_jeux' => 'The Legend of Zelda: Breath of the Wild', 'editeur' => 'Nintendo', 'categorie' => 'Action-aventure', 'description' => 'Un jeu d\'aventure en monde ouvert acclamé par la critique.', 'image_url' => 'https://tse4.mm.bing.net/th/id/OIP._wgfFq8aDeFxjLHDzNzknAHaEK?rs=1&pid=ImgDetMain&o=7&rm=3']);
        Jeu::create(['nom_jeux' => 'League of Legends', 'editeur' => 'Riot Games', 'categorie' => 'MOBA', 'description' => 'Un jeu de stratégie en équipe très populaire.', 'image_url' => 'https://tse1.mm.bing.net/th/id/OIP.mHSeDXGOgtJ6CElBk5vJ0wHaEK?rs=1&pid=ImgDetMain&o=7&rm=3']);
        Jeu::create(['nom_jeux' => 'Valorant', 'editeur' => 'Riot Games', 'categorie' => 'FPS', 'description' => 'Un jeu de tir tactique compétitif.', 'image_url' => 'https://wallpapercave.com/wp/wp6883786.jpg']);
        Jeu::create(['nom_jeux' => 'Overwatch 2', 'editeur' => 'Blizzard Entertainment', 'categorie' => 'FPS', 'description' => 'Un jeu de tir en équipe avec des héros uniques.', 'image_url' => 'https://tse4.mm.bing.net/th/id/OIP.VdfNjppuDHsPWUlJwFN1yQHaEK?rs=1&pid=ImgDetMain&o=7&rm=3']);
        Jeu::create(['nom_jeux' => 'Counter-Strike: Global Offensive', 'editeur' => 'Valve Corporation', 'categorie' => 'FPS', 'description' => 'Un jeu de tir à la première personne compétitif.', 'image_url' => 'https://tse2.mm.bing.net/th/id/OIP.OM-ysScsNzFXF5hIP86F-QHaEK?rs=1&pid=ImgDetMain&o=7&rm=3']);
        Jeu::create(['nom_jeux' => 'Dota 2', 'editeur' => 'Valve Corporation', 'categorie' => 'MOBA', 'description' => 'Un autre jeu de stratégie en équipe très populaire.', 'image_url' => 'https://tse3.mm.bing.net/th/id/OIP.iczWA5Spa3Wg0GxbXOUNzQHaEP?rs=1&pid=ImgDetMain&o=7&rm=3']);
        Jeu::create(['nom_jeux' => 'Minecraft', 'editeur' => 'Mojang Studios', 'categorie' => 'Sandbox', 'description' => 'Un jeu de construction et d\'aventure en monde ouvert.', 'image_url' => 'https://img.opencritic.com/game/194/o/1kabVU4E.jpg']);
        Jeu::create(['nom_jeux' => 'Rocket League', 'editeur' => 'Psyonix', 'categorie' => 'Sport/Action', 'description' => 'Un jeu de football avec des voitures propulsées par des fusées.', 'image_url' => 'https://tse1.mm.bing.net/th/id/OIP.LEc0_O2gobbfSFJx9_e3SAHaEK?rs=1&pid=ImgDetMain&o=7&rm=3']);
    }
}
