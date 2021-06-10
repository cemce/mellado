<?php

namespace App\Http\Controllers;

use App\Models\Archivos;
use Illuminate\Http\Request;

class ArchivosController extends Controller
{

    public function store (Request $request) {


        if ($request->hasfile('lopd')) {

            //Cual es el archivo
            $lopd = $request->file('lopd');
            //Nombre de la extension
            $extension = $lopd->getClientOriginalExtension();
            //Nombre del fichero
            $lopdname = "lopd" . time() . "." . $extension;

            $lopd->move('lopd' , $lopdname);
            $lopd = $lopdname;

        }
        if ($request->hasfile('visita')) {

            $visita = $request->file('visita');
            $extension = $visita->getClientOriginalExtension();
            $visitanombre = "visita" . time() . "." . $extension;

            $visita->move('visita' , $visitanombre);
            $visita = $visitanombre;

        }
        if ($request->hasfile('informe')) {

            $informe = $request->file('informe');

            $extension = $informe->getClientOriginalExtension();

            $informenombre = "informe" . time() . "." . $extension;

            $informe->move('informe' , $informenombre);
            $informe = $informenombre;
        }

        Archivos::create( [

            'id_comunidad_foreign' => $request->input('comunidadid'),
           'lopd' => $lopd,
           'visita' => $visita,
           'informe' => $informe
        ]);

        return redirect()->route('comunidades.index');
    }
}
