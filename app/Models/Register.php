<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    // use HasFactory;

    // protected $table = 'noticia';

    protected $fillable = [
        'nome',
        'email',
        'senha',
        'foto'
    ];
}
 //
