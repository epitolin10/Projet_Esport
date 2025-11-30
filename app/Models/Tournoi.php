<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model
{
    use HasFactory;

    protected $table = 'tournois';

    protected $fillable = [
        'nom_tournoi',
        'lieu',
        'date_debut',
        'date_fin',
        'description',
        'id_jeu',
    ];

    public function jeu()
    {
        return $this->belongsTo(Jeu::class, 'id_jeu');
    }

    public function participationsEquipes()
    {
        return $this->hasMany(Participation_equipe::class, 'id_tournoi');
    }

    public function equipes()
    {
        return $this->belongsToMany(Equipe::class, 'participations_equipe', 'id_tournoi', 'id_equipe');
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_tournoi');
    }
}
