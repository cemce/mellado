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

         return view ('comunidades.show', compact ('comunidades'));

    }

    public function destroy ($comunidades)
    {

        $comunidades = DB::table('comunidades')->where('comunidad', $comunidades);
        $comunidades->delete();
        return redirect()->route('comunidades.index');

    }


    public function exportpdf($comunidades) {

        $comunidad = DB::table('comunidades')->where('comunidad', $comunidades)->first();
        $nombre = $comunidad->comunidad;
        $pdf = PDF::loadView('comunidades.pdf' , ['comunidades' => $comunidad]);

        return $pdf->download('comunidad_' . $nombre . '.pdf');
    }

    public function search (Request $request) {

            $search = $request->input('tecnico');

            $comunidades =  DB::table('comunidades')->where('tecnico', $search)->where('administrador' , Auth::user()->name)->paginate(8);


            return view('comunidades.index', compact('comunidades'));

    }


}
