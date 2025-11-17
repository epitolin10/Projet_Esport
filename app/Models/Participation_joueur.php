<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation_joueur extends Model
{
    use HasFactory;

    protected $table = 'participations_joueur';

    protected $fillable = ['id_tournoi', 'id_joueur',];
}
