<?php


namespace App\Http\Controllers;
use \DB;
use Auth;
use Illuminate\Http\Request;
use App\Http\Models\Comunidades;

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



    public function show($comunidades) {

        $comunidad = DB::table('comunidades')->where('comunidad', $comunidades)->first();

        return view ('comunidades.show', ['comunidades' => $comunidad]);
    }

}
