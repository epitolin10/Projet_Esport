<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jeux extends Model
{
    use HasFactory;

    protected $table = 'jeux';

    protected $fillable = ['nom_jeux', 'editeur', 'categorie', 'description', 'image_url',];

    public function joueurs()
    {
        return $this->hasMany(Joueurs::class, 'id_jeu');
    }
    public function tournois()
    {
        return $this->hasMany(Tournois::class, 'id_jeu');
    }
}
