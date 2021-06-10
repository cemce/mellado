<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archivos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [

        'id_comunidad_foreign',
        'lopd',
        'visita',
        'informe'
    ];
}
