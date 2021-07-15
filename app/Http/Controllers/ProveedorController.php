<?php

namespace App\Http\Controllers;

use App\Models\Comunidades;
use App\Models\Proveedores;
use Illuminate\Http\Request;
use \DB;
use App\Models\User;
class ProveedorController extends Controller
{

    public function index () {

        $proveedor = DB::table('proveedores')->get();

        return view ('proveedor.index', compact('proveedor'));
    }

    public function store (Request $request) {

        Proveedores::create([


            'nombreproveedor' => $request->input('nombreproveedor'),
            'nif' => $request->input('nif'),
            'contacto' => $request->input('contacto') ,
            'email' => $request->input('email'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'municipio' => $request->input('municipio'),
            'codigopostal' => $request->input('codigopostal'),
            'provincia' => $request->input('provincia'),
            'id_admin' => $request->input('id_admin')


        ]);

        $email = $request->input('nombreproveedor');

        User::create([

           'name' => $request->input('nombreproveedor'),
           'email' => $email . '@admin.com',
           'password' => bcrypt('admin'),
           'role' => 'proveedor'

        ]);
        return redirect()->route('proveedor.index');

    }

    public function show ($proveedor) {

        $proveedores = DB::table('proveedores')->where('nombreproveedor' , $proveedor)->first();

        return view ('proveedor.show', compact('proveedores'));

    }
    public function destroy ($id) {

        $proveedor = DB::table('proveedores')->where('id', $id);
        $proveedor->delete();
        return redirect()->route('proveedor.index');
    }

    public function create () {

        return view ('proveedor.create');
    }

    public function edit ($id) {

        $proveedor = Proveedores::findOrFail($id);

        return view ('proveedor.edit', compact('proveedor'));
    }



    public function update(Request $request, $id)
        {

            $cambio = Proveedores::findOrFail($id);
            $input = $request->all();
            $cambio->fill($input)->save();

            $proveedor = DB::table('proveedores')->get();

            return view ('proveedor.index', compact('proveedor'));

        }

    public function asignar() {


        $comunidades = DB::table('comunidades')->orderBy('comunidad', 'asc')->get();
        $proveedores = DB::table('proveedores')->get();

        return view ('proveedor.asignar', compact('comunidades' , 'proveedores'));
    }


    public function archivos ($proveedor, $id) {




        $proveedores = DB::table('proveedores')->where('nombreproveedor' , $proveedor)->first();
        $comunidad = Comunidades::findOrFail($id);
        $archivos = DB::table('archivos')->where('id_proveedor' , $proveedores->id)
                                         ->where('id_comunidad' , $comunidad->id)
                                         ->first();



        return view ('proveedor.archivos', ['proveedores' => $proveedores , 'comunidad' => $comunidad , 'archivos' => $archivos]);

    }
}
