<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidades extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [

        'id',
        'comunidad',
        'numerodevecinos',
        'precio',
        'municipio',
        'cp',
        'nif',
        'provincia',
        'direccion',
        'visita',
        'tecnico',
        'administrador',
        'foto'
    ];

}

