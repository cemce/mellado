<?php

namespace App\Http\Controllers;
use \DB;
use Illuminate\Http\Request;
use App\Http\Models\Comunidades;

class AdminFincaController extends Controller
{
    public function index () {

        return view ('administrador.index');
    }

    public function show ($nombre) {

        $comunidad = DB::table('comunidades')->where('administrador', $nombre)->paginate(9);


        return view ('administrador.show', ['comunidades' => $comunidad]);
    }


}
