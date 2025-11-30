<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    use HasFactory;

    protected $table = 'joueurs';

    protected $fillable = ['pseudo', 'photo', 'id_jeu', 'id_equipe'];

    public function jeu()
    {
        return $this->belongsTo(Jeu::class, 'id_jeu');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

    public function infoJoueur()
    {
        return $this->hasOne(InfoJoueur::class, 'id_joueur');
    }
}
