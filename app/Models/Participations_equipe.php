<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participations_equipe extends Model
{
    use HasFactory;

    protected $table = 'participations_equipe';

    protected $fillable = ['id_tournoi', 'id_equipe',];
}
