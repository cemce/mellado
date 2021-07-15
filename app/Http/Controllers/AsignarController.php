<?php

namespace App\Http\Controllers;

use App\Models\Comunidades;
use Illuminate\Http\Request;
use DB;

class AsignarController extends Controller
{

    public function asignar (Request $request) {


            $nombreComunidad = $request->input('comunidades');
            $comunidad = DB::table('comunidades')->where('comunidad' , $nombreComunidad)->get();
            $id = $comunidad[0]->id;


            $cambio = Comunidades::findOrFail($id);

            $cambio->id_proveedor1 = $request->input('proveedores1');
            $cambio->id_proveedor2 = $request->input('proveedores2');
            $cambio->id_proveedor3 = $request->input('proveedores3');

            $cambio->save();


            $comunidades = DB::table('comunidades')->orderBy('comunidad', 'asc')->get();
            $proveedores = DB::table('proveedores')->get();

            return redirect()->back()->withSuccess(['Guardado correctamente!']);




    }

}
