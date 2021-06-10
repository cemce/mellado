<?php

namespace App\Http\Controllers;
use App\Models\Comunidades;
use Illuminate\Http\Request;
use DB;
use URL;
class FormularioController extends Controller
{
    public function index () {

        return view ('formulario.show');
    }

    public function store (Request $request) {


        if ($request->hasfile('foto')) {

            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $fotonombre = time() . "." . $extension;

            $foto->move('foto' , $fotonombre);
            $comunidadfoto = $fotonombre;
        }
        Comunidades::create([

            'comunidad' => $request->input('comunidad'),
            'provincia' => $request->input('provincia'),
            'precio' => $request->input('precio'),
            'cp' =>$request->input('cp'),
            'municipio' => $request->input('municipio'),
            'nif' => $request->input('nif'),
            'direccion' => $request->input('direccion'),
            'visita' => $request->input('visita'),
            'administrador' => $request->input('administrador'),
            'tecnico' => $request->input('tecnico'),
            'numerodevecinos' => $request->input('numerodevecinos'),
            'foto' => $comunidadfoto,


        ]);

        return redirect()->route('comunidades.index');
    }






}
