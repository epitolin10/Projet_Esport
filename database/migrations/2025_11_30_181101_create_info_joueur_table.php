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
        Schema::create('info_joueur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_joueur');
            $table->string('lien_x')->nullable();
            $table->string('lien_twitch')->nullable();
            $table->string('lien_youtube')->nullable();
            $table->string('lien_instagram')->nullable();
            $table->text('biographie')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->foreign('id_joueur')->references('id')->on('joueurs')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_joueur');
    }
};
