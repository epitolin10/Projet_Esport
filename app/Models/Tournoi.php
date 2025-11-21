<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model
{
    use HasFactory;

    protected $table = 'tournois';

    protected $fillable = ['nom_tournoi', 'lieu', 'date', 'id_jeu',];

    public function jeu()
    {
        return $this->belongsTo(Jeu::class, 'id_jeu');
    }
}
