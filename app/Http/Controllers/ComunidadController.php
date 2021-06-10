<?php


namespace App\Http\Controllers;
use \DB;
use Auth;
use PDF;
use Illuminate\Http\Request;
use App\Models\Comunidades;

class ComunidadController extends Controller
{

    public function index () {

        if (Auth::user()->role == "comercial") {

            $name = Auth::user()->name;
            $comunidades = DB::table('comunidades')->where('tecnico', $name)->paginate(8);
            return view('comunidades.index', ['comunidades' => $comunidades]);

        }

        else if (Auth::user()->role == "adminfinca") {

            $name = Auth::user()->name;
            $comunidades = DB::table('comunidades')->where('administrador', $name)->paginate(8);
            return view('comunidades.index', ['comunidades' => $comunidades]);

        }

        else {

            $comunidades = DB::table('comunidades')->paginate(8);
            return view('comunidades.index', ['comunidades' => $comunidades]);
        }
    }

    public function show($comunidades)
    {


        $comunidades = DB::table('comunidades')->where('comunidad', $comunidades)->first();
        $archivos = DB::table('archivos')->where('id_comunidad_foreign', $comunidades->id)->first();




        return view ('comunidades.show', compact ('comunidades', 'archivos'));

    }

    public function destroy ($comunidades)
    {

        $comunidades = DB::table('comunidades')->where('comunidad', $comunidades);
        $comunidades->delete();
        return redirect()->route('comunidades.index');

    }


    public function exportpdf($comunidades) {

        $comunidad = DB::table('comunidades')->where('comunidad', $comunidades)->first();

        $pdf = PDF::loadView('comunidades.pdf' , ['comunidades' => $comunidad]);

        return $pdf->download('comunidad.pdf');
    }

    public function search (Request $request) {

            $search = $request->input('tecnico');

            $comunidades =  DB::table('comunidades')->where('tecnico', $search)->paginate(8);


            return view('comunidades.index', compact('comunidades'));

    }


}
