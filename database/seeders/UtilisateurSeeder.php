<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Hash;

class UtilisateurSeeder extends Seeder
{
    public function run(): void
    {
        Utilisateur::create([
            'pseudo' => 'Admin',
            'email' => 'admin@root.com',
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
            'role' => 'admin'
        ]);
    }
}
