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
        Schema::create('participations_joueur', function (Blueprint $table) {
            $table->id();
            $table->ForeignId('id_tournoi')->constrained('tournois')->onDelete('cascade');
            $table->ForeignId('id_joueur')->constrained('joueurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations_joueur');
    }
};
