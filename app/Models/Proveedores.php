<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;
    public $timestamps = false;


    protected $fillable = [

        'id_admin',
        'id',
        'nombreproveedor',
        'nif',
        'contacto',
        'email',
        'telefono',
        'direccion',
        'municipio',
        'codigopostal',
        'provincia'

    ];
}

