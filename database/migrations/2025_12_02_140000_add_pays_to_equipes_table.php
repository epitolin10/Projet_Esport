<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Vérifie si la table existe
        if (Schema::hasTable('equipes')) {
            Schema::table('equipes', function (Blueprint $table) {
                // Ajoute la colonne 'pays' seulement si elle n'existe pas déjà
                if (!Schema::hasColumn('equipes', 'pays')) {
                    $table->string('pays')->nullable()->after('tag');
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('equipes') && Schema::hasColumn('equipes', 'pays')) {
            Schema::table('equipes', function (Blueprint $table) {
                $table->dropColumn('pays');
            });
        }
    }
};
