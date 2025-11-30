<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InfoJoueur extends Model
{
    use HasFactory;

    protected $table = 'info_joueur';

    protected $fillable = [
        'id_joueur',
        'lien_x',
        'lien_twitch',
        'lien_youtube',
        'lien_instagram',
        'biographie',
        'date_naissance',
        'nationalite',
    ];

    public function joueur()
    {
        return $this->belongsTo(Joueur::class, 'id_joueur');
    }
}
