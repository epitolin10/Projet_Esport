<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joueurs extends Model
{
    use HasFactory;

    protected $table = 'joueurs';

    protected $fillable = ['pseudo', 'id_jeu', 'id_equipe'];

    public function jeu()
    {
        return $this->belongsTo(Jeux::class, 'id_jeu');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipes::class, 'id_equipe');
    }
}
