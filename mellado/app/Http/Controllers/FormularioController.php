<?php

namespace App\Http\Controllers;
use App\Models\Comunidades;
use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index () {

        return view ('formulario.show');
    }

    public function store (Request $request) {


        $addcomunidad = new Comunidades ([

            'comunidad' => $request->input('comunidad'),
            'numerodevecinos' => $request->input('numerodevecinos'),
            'direccion' => $request->input('direccion'),
            'visita' => $request->input('visita'),
            'tecnico' => $request->input('tecnico'),
            'administrador' => $request->input('administrador'),

        ]);

        $addcomunidad->save();

    
    }

}
