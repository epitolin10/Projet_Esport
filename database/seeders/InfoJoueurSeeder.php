<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\InfoJoueur;
use App\Models\Joueur;

class InfoJoueurSeeder extends Seeder
{
    public function run(): void
    {
        $joueurs = Joueur::all();

        foreach ($joueurs as $joueur) {
            InfoJoueur::create([
                'id_joueur' => $joueur->id,
                'lien_x' => null,
                'lien_twitch' => null,
                'lien_youtube' => null,
                'lien_instagram' => null,
                'biographie' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
                'date_naissance' => null,
                'nationalite' => null,
            ]);
            InfoJoueur::updateOrCreate(['id_joueur' => 38, 'lien_x' => null, 'lien_twitch' => 'https://www.twitch.tv/julgane', 'lien_youtube' => 'https://www.youtube.com/c/Julgane', 'lien_instagram' => 'https://www.instagram.com/julgane_/', 'biographie' => 'Julgane, de son vrai prénom Julien, est un vidéaste et streameur de la catégorie Gaming âgé de 20 ans. Il habite en Occitanie dans le sud de la France, pas loin de Toulouse. Avant ses débuts sur Internet, et pendant son ascension dans le monde du streaming et de la vidéo, Julgane faisait des études autour de l\'ingénierie. Son audience est maintenant constituée de plus de 315 000 abonnés, avec une collection de plus de 100 vidéos.', 'date_naissance' => null, 'nationalite' => 'France']);
            InfoJoueur::updateOrCreate(['id_joueur' => 154, 'lien_x' => 'https://x.com/Fildrong/', 'lien_twitch' => 'https://www.twitch.tv/fildrong', 'lien_youtube' => 'https://www.youtube.com/c/Fildrong', 'lien_instagram' => 'https://www.instagram.com/fildrong/', 'biographie' => 'Fildrong est un YouTubeur principalement Pokémon spécialisé en stratégie. Anciennement membre du site et de la chaîne Pokémon Trash ainsi que de Trash, il possède également sa propre chaîne personnelle sur laquelle il fait principalement de la stratégie et du Let\'s Play Pokémon. Il était le Trasher le plus actif en vidéo sur sa chaîne personnelle.', 'date_naissance' => null, 'nationalite' => 'France']);
            InfoJoueur::updateOrCreate(['id_joueur' => 155, 'lien_x' => null, 'lien_twitch' => 'https://www.twitch.tv/redemptions', 'lien_youtube' => 'https://www.youtube.com/channel/UCAEhlJXdFkR9V5Sqeu-vptg', 'lien_instagram' => 'https://x.com/RedemptionBj', 'biographie' => null, 'date_naissance' => null, 'nationalite' => 'France']);
            InfoJoueur::updateOrCreate(['id_joueur' => 37, 'lien_x' => 'https://x.com/dreamwastaken', 'lien_twitch' => null, 'lien_youtube' => 'https://www.youtube.com/c/Dream', 'lien_instagram' => 'https://instagram.com/dreamwastaken', 'biographie' => 'Dream est un YouTubeur américain principalement connu pour ses vidéos Minecraft. Il est surtout célèbre pour sa série "Minecraft Manhunt" et pour être le créateur du serveur Minecraft "Dream SMP", qui a accueilli de nombreux autres YouTubeurs et streamers populaires. Dream est reconnu pour ses compétences exceptionnelles en jeu, son contenu engageant et sa capacité à créer des histoires captivantes autour de ses aventures dans Minecraft.', 'date_naissance' => null, 'nationalite' => 'États-Unis']);
        
            // Infos des joueurs Pokemon Championship
        }
    }
}
