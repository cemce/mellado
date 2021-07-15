<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [

        'id',
        'id_proveedor',
        'id_comunidad',
        'lopd',
        'visita',
        'informe'
    ];
}
