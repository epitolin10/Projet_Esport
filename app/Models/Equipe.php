<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    use HasFactory;

    protected $table = 'equipes';

    protected $fillable = ['nom_equipe', 'tag', 'Pays', 'logo_url',];

    public function joueurs()
    {
        return $this->hasMany(Joueurs::class, 'id_equipe');
    }
}
