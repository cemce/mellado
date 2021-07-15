<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class VistaProveedor extends Controller
{

    public function index () {

        $comunidades = DB::table('comunidades')->where('id_proveedor1' , Auth::user()->name)

                                                ->orWhere('id_proveedor2' , Auth::user()->name)
                                                ->orWhere('id_proveedor3' , Auth::user()->name)
                                                ->get();

        $proveedor = DB::table('proveedores')->where('nombreproveedor' , Auth::user()->name)->get();
        return view ('vistaproveedor.index' , compact('comunidades' , 'proveedor'));
    }

    public function show ($comunidades) {

        $comunidades = DB::table('comunidades')->where('comunidad', $comunidades)->first();

        $proveedor = DB::table('proveedores')->where('nombreproveedor' , Auth::user()->name)->first();

        $archivos = DB::table('archivos')->where('id_comunidad' , $comunidades->id)
                                         ->where('id_proveedor' , $proveedor->id)
                                         ->first();

    return view ('comunidades.show', compact ('comunidades', 'proveedor' , 'archivos'));
    }
}
