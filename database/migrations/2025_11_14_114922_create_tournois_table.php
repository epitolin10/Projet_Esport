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
        Schema::create('tournois', function (Blueprint $table) {
            $table->id();
            $table->string('nom_tournoi');
            $table->string('lieu');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->text('description');
            //id_jeu fait référence au jeu principal du tournoi
            $table->ForeignId('id_jeu')->constrained('jeux')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tournois');
    }
};
