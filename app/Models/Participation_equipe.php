<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participation_equipe extends Model
{
    use HasFactory;

    protected $table = 'participations_equipe';

    protected $fillable = ['id_tournoi', 'id_equipe',];

    public function equipe()
    {
        return $this->belongsTo(Equipe::class, 'id_equipe');
    }

    public function tournoi()
    {
        return $this->belongsTo(Tournoi::class, 'id_tournoi');
    }
}
