<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('joueurs', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            
            $table->ForeignId('id_jeu')->constrained('jeux')->onDelete('cascade');
            // On ignore la contrainte de la clé étrangère si le joueur n'appartient à aucune équipe
            $table->ForeignId('id_equipe')->nullable()->constrained('equipes')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('joueurs');
    }
};
