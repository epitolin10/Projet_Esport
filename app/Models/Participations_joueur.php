<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participations_joueur extends Model
{
    use HasFactory;

    protected $table = 'participations_joueur';

    protected $fillable = ['id_tournoi', 'id_joueur',];
}
