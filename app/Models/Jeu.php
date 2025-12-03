<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jeu extends Model
{
    use HasFactory;

    protected $table = 'jeux';

    protected $fillable = ['nom_jeux', 'editeur', 'categorie', 'description', 'image_url',];

    public function joueurs()
    {
        return $this->hasMany(Joueur::class, 'id_jeu');
    }
    public function tournois()
    {
        return $this->hasMany(Tournoi::class, 'id_jeu');
    }
}
