<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{   
    use HasFactory;

    protected $table = 'commentaires';

    protected $fillable = ['contenu', 'id_utilisateur', 'id_tournoi',];

    public function utilisateur()
    {
        return $this->belongsTo(Utilisateur::class, 'id_utilisateur');
    }

    public function tournoi()
    {
        return $this->belongsTo(Tournoi::class, 'id_tournoi');
    }
}
