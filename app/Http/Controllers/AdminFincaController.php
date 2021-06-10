<?php

namespace App\Http\Controllers;
use \DB;
use Illuminate\Http\Request;
use App\Http\Models\Comunidades;
use Auth;

class AdminFincaController extends Controller
{
    public function index ()
    {
        return view('administrador.index');

    }


    public function show ($nombre) {

        $comunidad = DB::table('comunidades')->where('administrador', $nombre)->paginate(9);
        return view ('administrador.show', ['comunidades' => $comunidad]);
    }


    public function edit () {

        return view (' formulario.edit' );
    }

    public function search (Request $request) {

        $search = $request->input('tecnico');

        $comunidades =  DB::table('comunidades')->where('tecnico', $search)->paginate(9);


        return view('comunidades.index', compact('comunidades'));

    }
}
