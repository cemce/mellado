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
        'id_proveedor1',
        'id_proveedor2',
        'id_proveedor3',
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

