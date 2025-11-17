<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->Call([
            JeuSeeder::class,
            EquipeSeeder::class,
            JoueurSeeder::class,
            TournoiSeeder::class,
            Participations_equipeSeeder::class,
            Participations_joueurSeeder::class,
            
        ]);
    }
}
