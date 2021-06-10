<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comunidades extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [

        'comunidad',
        'numerodevecinos',
        'direccion',
        'visita',
        'tecnico',
        'administrador'
    ];

}
