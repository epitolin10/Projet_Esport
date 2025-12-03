<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';

    protected $fillable = ['nom_equipe', 'tag', 'pays', 'logo_url',];

    public function joueurs()
    {
        return $this->hasMany(Joueur::class, 'id_equipe');
    }
}
