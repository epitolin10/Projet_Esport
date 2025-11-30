<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Utilisateur extends Authenticatable
{
    use HasFactory;

    protected $table = 'utilisateurs';
    
    protected $fillable = ['pseudo', 'email', 'password', 'role'];

    protected $hidden = ['password'];

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class, 'id_utilisateur');
    }
}
