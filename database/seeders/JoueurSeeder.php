<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Joueur;

class JoueurSeeder extends Seeder
{
    public function run()
    {
        //Les joueurs pour League of Legends
        // Equipe 1 : Karmine Corp
        Joueur::create(['pseudo' => 'Canna', 'photo' => 'Canna.jpg', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Yike', 'photo' => 'Yike.webp', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Vladi', 'photo' => 'Vladi.webp', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Caliste', 'photo' => 'caliste.webp', 'id_jeu' => 2, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Targamas', 'photo' => 'targamas.webp', 'id_jeu' => 2, 'id_equipe' => 1]);
        
        //Equipe 2 : G2 Esports
        Joueur::create(['pseudo' => 'BrokenBlade', 'photo' => 'brokenblade.webp', 'id_jeu' => 2, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'Jankos', 'photo' => 'jankos.png', 'id_jeu' => 2, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'caps', 'photo' => 'caps.webp', 'id_jeu' => 2, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'Flakked', 'photo' => 'flakked.webp', 'id_jeu' => 2, 'id_equipe' => 2]);

        //Equipe 3 : Fnatic
        Joueur::create(['pseudo' => 'Adam', 'photo' => 'adam.webp', 'id_jeu' => 2, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Razork', 'photo' => 'razork.webp', 'id_jeu' => 2, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Humanoid', 'photo' => 'humanoid.webp', 'id_jeu' => 2, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Rekkles', 'photo' => 'rekkles.webp', 'id_jeu' => 2, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Misty', 'photo' => 'misty.webp', 'id_jeu' => 2, 'id_equipe' => 3]);

        //Les joueurs pour Valorant
        // Equipe 1 : Karmine Corp
        Joueur::create(['pseudo' => 'Marteen', 'photo' => 'marteen.jpg', 'id_jeu' => 3, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'saadhak', 'photo' => 'saadhak.png', 'id_jeu' => 3, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Pyrolll', 'photo' => 'pyrolll.png', 'id_jeu' => 3, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Elite', 'photo' => 'elite.png', 'id_jeu' => 3, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Magnum', 'photo' => 'magnum.webp', 'id_jeu' => 3, 'id_equipe' => 1]);


        //Equipe 2 : G2 Esports
        Joueur::create(['pseudo' => 'baybybay', 'photo' => 'baybybay.png', 'id_jeu' => 3, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'JonahP', 'photo' => 'jonahp.png', 'id_jeu' => 3, 'id_equipe' => 2]);

        //Equipe 3 : Fnatic
        Joueur::create(['pseudo' => 'Boaster', 'photo' => 'boaster.webp', 'id_jeu' => 3, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Alfajer', 'photo' => 'alfajer.jpg', 'id_jeu' => 3, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'kaajak', 'photo' => 'kaajak.jpg', 'id_jeu' => 3, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'Crashies', 'photo' => 'crashies.png', 'id_jeu' => 3, 'id_equipe' => 3]);
        Joueur::create(['pseudo' => 'veqaj', 'photo' => 'veqaj.png', 'id_jeu' => 3, 'id_equipe' => 3]);

        //Equipe 4 Gentles Mates
        Joueur::create(['pseudo' => 'starxo', 'photo' => 'starxo.jpg' , 'id_jeu' => 3, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'bipo', 'photo' => 'bipo.png' , 'id_jeu' => 3, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'GLYPH', 'photo' => 'glyph.png' , 'id_jeu' => 3, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'Minny', 'photo' => 'Minny.png' , 'id_jeu' => 3, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'Click', 'photo' => 'click.png' , 'id_jeu' => 3, 'id_equipe' => 4]);

        //Equipe 5 : Team liquid
        Joueur::create(['pseudo' => 'keiko', 'photo' => 'keiko.webp', 'id_jeu' => 3, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'SerialKiller', 'photo' => 'serialkiller.webp', 'id_jeu' => 3, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'trexx', 'photo' => 'trexx.png', 'id_jeu' => 3, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'paTiTek', 'photo' => 'patitek.png', 'id_jeu' => 3, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'penny', 'photo' => 'penny.png', 'id_jeu' => 3, 'id_equipe' => 5]);


        Joueur::create(['pseudo' => 'dream', 'photo' => 'dream.jpg', 'id_jeu' => 6 , 'id_equipe' => 6]);


        Joueur::create(['pseudo' => 'Julgane', 'photo' => 'julgane.webp', 'id_jeu' => 1, 'id_equipe' => 6]);

        // Les joueurs pour Overwatch 2 (ID Jeu: 4)
        
        // Equipe : Crazy Raccoon (ID: 10)
        Joueur::create(['pseudo' => 'CH0R0NG', 'photo' => 'CH0R0NG.png', 'id_jeu' => 4, 'id_equipe' => 10]);
        Joueur::create(['pseudo' => 'HeeSang', 'photo' => 'heesang.png', 'id_jeu' => 4, 'id_equipe' => 10]);
        Joueur::create(['pseudo' => 'JunBin', 'photo' => 'junbin.jpg', 'id_jeu' => 4, 'id_equipe' => 10]);
        Joueur::create(['pseudo' => 'LIP', 'photo' => 'lip.png', 'id_jeu' => 4, 'id_equipe' => 10]);
        Joueur::create(['pseudo' => 'MAX', 'photo' => 'max.jpg', 'id_jeu' => 4, 'id_equipe' => 10]);
        Joueur::create(['pseudo' => 'shu', 'photo' => 'shu.png', 'id_jeu' => 4, 'id_equipe' => 10]);

        // Equipe : Team Falcons (ID: 12)
        Joueur::create(['pseudo' => 'ChiYo', 'photo' => 'chiyo.jpg', 'id_jeu' => 4, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'Fielder', 'photo' => 'fielder.png', 'id_jeu' => 4, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'Hanbin', 'photo' => 'hanbin.png', 'id_jeu' => 4, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'Proper', 'photo' => 'proper.jpg', 'id_jeu' => 4, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'Stalk3r', 'photo' => 'stalk3r.png', 'id_jeu' => 4, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'MER1T', 'photo' => 'mer1t.jpg', 'id_jeu' => 4, 'id_equipe' => 12]);

        // Equipe : Varrel (ID: 14)
        Joueur::create(['pseudo' => 'KSG', 'photo' => 'ksg.jpg', 'id_jeu' => 4, 'id_equipe' => 14]);
        Joueur::create(['pseudo' => 'Nico', 'photo' => 'nico.jpeg', 'id_jeu' => 4, 'id_equipe' => 14]);
        Joueur::create(['pseudo' => 'qki', 'photo' => 'qki.jpg', 'id_jeu' => 4, 'id_equipe' => 14]);
        Joueur::create(['pseudo' => 'Qloud', 'photo' => 'qloud.jpg', 'id_jeu' => 4, 'id_equipe' => 14]);
        Joueur::create(['pseudo' => 'Sley', 'photo' => 'sley.png', 'id_jeu' => 4, 'id_equipe' => 14]);
        Joueur::create(['pseudo' => 'TOPDRAGON', 'photo' => 'topdragon.png', 'id_jeu' => 4, 'id_equipe' => 14]);

        // Equipe : Team Liquid (ID: 5)
        Joueur::create(['pseudo' => 'Infekted', 'photo' => 'infekted.jpg', 'id_jeu' => 4, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'Rupal', 'photo' => 'rupal.png', 'id_jeu' => 4, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'TR33', 'photo' => 'tr33.jpg', 'id_jeu' => 4, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'Vega', 'photo' => 'vega.png', 'id_jeu' => 4, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'zeruhh', 'photo' => 'zeruhh.png', 'id_jeu' => 4, 'id_equipe' => 5]);

        // Equipe : Spacestation Gaming (ID: 11)
        Joueur::create(['pseudo' => 'Cjay', 'photo' => 'cjay.webp', 'id_jeu' => 4, 'id_equipe' => 11]);
        Joueur::create(['pseudo' => 'Sugarfree', 'photo' => 'sugarfree.jpg', 'id_jeu' => 4, 'id_equipe' => 11]);
        Joueur::create(['pseudo' => 'Hawk', 'photo' => 'hawk.png', 'id_jeu' => 4, 'id_equipe' => 11]);
        Joueur::create(['pseudo' => 'Kronik', 'photo' => 'kronik.webp', 'id_jeu' => 4, 'id_equipe' => 11]);
        Joueur::create(['pseudo' => 'Lep', 'photo' => 'lep.png', 'id_jeu' => 4, 'id_equipe' => 11]);
        Joueur::create(['pseudo' => 'scissors', 'photo' => 'scissors.jpg', 'id_jeu' => 4, 'id_equipe' => 11]);

        // Equipe : Team Peps (ID: 13)
        Joueur::create(['pseudo' => 'FDGod', 'photo' => 'fdgod.png', 'id_jeu' => 4, 'id_equipe' => 13]);
        Joueur::create(['pseudo' => 'Xeriongdh', 'photo' => 'xeriongdh.jpg', 'id_jeu' => 4, 'id_equipe' => 13]);
        Joueur::create(['pseudo' => 'SoOn', 'photo' => 'soon.jpg', 'id_jeu' => 4, 'id_equipe' => 13]);
        Joueur::create(['pseudo' => 'Dip', 'photo' => 'dip.jpg', 'id_jeu' => 4, 'id_equipe' => 13]);
        Joueur::create(['pseudo' => 'Willys07', 'photo' => null, 'id_jeu' => 4, 'id_equipe' => 13]);
        Joueur::create(['pseudo' => 'Zorrow', 'photo' => null, 'id_jeu' => 4, 'id_equipe' => 13]);

        // Equipe : T1 (ID: 7)
        Joueur::create(['pseudo' => 'DONGHAK', 'photo' => 'donghak.png', 'id_jeu' => 4, 'id_equipe' => 7]);
        Joueur::create(['pseudo' => 'Proud', 'photo' => 'proud.webp', 'id_jeu' => 4, 'id_equipe' => 7]);
        Joueur::create(['pseudo' => 'skewed', 'photo' => 'skewed.png', 'id_jeu' => 4, 'id_equipe' => 7]);
        Joueur::create(['pseudo' => 'Viper', 'photo' => 'viper.png', 'id_jeu' => 4, 'id_equipe' => 7]);
        Joueur::create(['pseudo' => 'ZEST', 'photo' => 'zest.png', 'id_jeu' => 4, 'id_equipe' => 7]);
        Joueur::create(['pseudo' => 'vigilante', 'photo' => 'vigilante.png', 'id_jeu' => 4, 'id_equipe' => 7]);
        Joueur::create(['pseudo' => 'Jasm1ne', 'photo' => 'jasm1ne.webp', 'id_jeu' => 4, 'id_equipe' => 7]);

        // Les joueurs pour CS2 (ID Jeu: 5)

        // Equipe : Team Vitality (ID: 9)
        Joueur::create(['pseudo' => 'apEX', 'photo' => 'apex.jpg', 'id_jeu' => 5, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'ZywOo', 'photo' => 'zywoo.jpg', 'id_jeu' => 5, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'flameZ', 'photo' => 'flamez.jpg', 'id_jeu' => 5, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'mezii', 'photo' => 'mezii.png', 'id_jeu' => 5, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'ropz', 'photo' => 'ropz.jpg', 'id_jeu' => 5, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'XTQZZZ', 'photo' => 'xtqzzz.jpg', 'id_jeu' => 5, 'id_equipe' => 9]);

        // Equipe : Team Falcons (ID: 12)
        Joueur::create(['pseudo' => 'NiKo', 'photo' => 'niko.jpg', 'id_jeu' => 5, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'TeSeS', 'photo' => 'teses.jpg', 'id_jeu' => 5, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'kyxsan', 'photo' => 'kyxsan.png', 'id_jeu' => 5, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'm0NESY', 'photo' => 'monesy.jpg', 'id_jeu' => 5, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'kyousuke', 'photo' => 'kyousuke.png', 'id_jeu' => 5, 'id_equipe' => 12]);
        Joueur::create(['pseudo' => 'zonic', 'photo' => 'zonic.jpg', 'id_jeu' => 5, 'id_equipe' => 12]);

        // Equipe : G2 Esports (ID: 2)
        Joueur::create(['pseudo' => 'huNter-', 'photo' => 'hunter-.jpg', 'id_jeu' => 5, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'malbsMd', 'photo' => 'maslbsmd.png', 'id_jeu' => 5, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'HeavyGod', 'photo' => null, 'id_jeu' => 5, 'id_equipe' => 2]); // Pas d'image trouvée
        Joueur::create(['pseudo' => 'SunPayus', 'photo' => null, 'id_jeu' => 5, 'id_equipe' => 2]); // Pas d'image trouvée
        Joueur::create(['pseudo' => 'matys', 'photo' => 'matys.png', 'id_jeu' => 5, 'id_equipe' => 2]);
        Joueur::create(['pseudo' => 'sAw', 'photo' => 'saw.png', 'id_jeu' => 5, 'id_equipe' => 2]);

        // Equipe : Team Liquid (ID: 5)
        Joueur::create(['pseudo' => 'NAF', 'photo' => 'naf.jpg', 'id_jeu' => 5, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'ultimate', 'photo' => 'ultimate.png', 'id_jeu' => 5, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'NertZ', 'photo' => 'nertz.jpeg', 'id_jeu' => 5, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'siuhy', 'photo' => 'siuhy.png', 'id_jeu' => 5, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'EliGE', 'photo' => 'elige.jpg', 'id_jeu' => 5, 'id_equipe' => 5]);
        Joueur::create(['pseudo' => 'flashie', 'photo' => 'flashie.jpg', 'id_jeu' => 5, 'id_equipe' => 5]);

        // Les joueurs pour Rocket League (ID Jeu: 7)

        // Equipe : Karmine Corp (ID: 1)
        Joueur::create(['pseudo' => 'Vatira', 'photo' => 'vatira.jpg', 'id_jeu' => 7, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Atow.', 'photo' => 'atow..jpg', 'id_jeu' => 7, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'juicy', 'photo' => 'juicy.jpg', 'id_jeu' => 7, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Extra', 'photo' => 'extra.png', 'id_jeu' => 7, 'id_equipe' => 1]);
        Joueur::create(['pseudo' => 'Jordi', 'photo' => null, 'id_jeu' => 7, 'id_equipe' => 1]); // Pas d'image trouvée

        // Equipe : Gentle Mates (ID: 4)
        Joueur::create(['pseudo' => 'Archie', 'photo' => 'archie.jpg', 'id_jeu' => 7, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'nass', 'photo' => 'nass.jpg', 'id_jeu' => 7, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'Oski', 'photo' => 'oski.jpg', 'id_jeu' => 7, 'id_equipe' => 4]);
        Joueur::create(['pseudo' => 'Snaski', 'photo' => 'snaski.jpg', 'id_jeu' => 7, 'id_equipe' => 4]);

        // Equipe : Team Vitality (ID: 9)
        Joueur::create(['pseudo' => 'zen', 'photo' => 'zen.jpg', 'id_jeu' => 7, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'ExoTiiK', 'photo' => 'exotiik.png', 'id_jeu' => 7, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'stizzy', 'photo' => 'stizzy.jpg', 'id_jeu' => 7, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'Eversax', 'photo' => 'eversax.jpg', 'id_jeu' => 7, 'id_equipe' => 9]);
        Joueur::create(['pseudo' => 'Hugo', 'photo' => null, 'id_jeu' => 7, 'id_equipe' => 9]); // Pas d'image trouvée

        // Les joueurs pour Minecraft (ID Jeu: 6) - Sans équipe (ID Equipe: 6)
        Joueur::create(['pseudo' => 'lowkey', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'drip120', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Bloopy', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'NoHacsJustRoblox', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'skycrab1', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Aquacorde', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'NoFear1337', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Jay12310', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'jason_n', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'sadekeppi', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'doogile', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'itsnahan', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'kazzruns', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'KenanKardes', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Kxpow', 'photo' => null, 'id_jeu' => 6, 'id_equipe' => 6]);

        // Les joueurs pour Zelda BOTW (ID Jeu: 1) - Sans équipe (ID Equipe: 6)
        Joueur::create(['pseudo' => 'MoldyMeatballs', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Player5', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Koroks', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'TrevorSR', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Dracolink', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'moistgoolash', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Liamax754', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'TyTt', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Arna', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'xiaoxiaoqiang', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Zilano', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Wolhaiksong', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'XiaoXiaMi', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Onyx_Ebony', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'buna', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'huiwengege', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Klebs_speedrun', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Zdi', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'RequiemOfSpirit', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'keuss', 'photo' => null, 'id_jeu' => 1, 'id_equipe' => 6]);

        // Pour les joueurs pokemon championship (ID Jeu: 9) - Sans équipe (ID Equipe: 6)
        Joueur::create(['pseudo' => 'Fildrong', 'photo' => 'fildrong.jpg', 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Redemption', 'photo' => 'redemption.jpg', 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Carson Confer', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Giovanni Cischke', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'James Evans', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Joseph Ugarte', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Junxi Zhu', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Justin Tang', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Kyle Livinghouse', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Marcus Dion', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Paul Chua', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Riley Factura', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'William Brown', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Wolfe Glick', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Behzad Muntazir', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Cary D’Ortona', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Thomas Irwin', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Yuki Zaninovich', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Aaron Brok', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Aaron Traylor', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Adam Colson', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
        Joueur::create(['pseudo' => 'Aditya Subramanian', 'photo' => null, 'id_jeu' => 9, 'id_equipe' => 6]);
    }
}
