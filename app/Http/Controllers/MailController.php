<?php

namespace App\Http\Controllers;
use App\Mail\EnviarMail;
use Mail;
use DB;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail ($request) {


        dd($request);
        $comunidad = DB::table('comunidades')->where('comunidad', $request)->first();
        $archivos = DB::table('archivos')->where('id_comunidad', $comunidad->id)->first();

        $data = [
          'name' => 'Mellado Cardoner',
            'verification_code' => 'hola',
            'comunidad' => $comunidad,
            'archivos' => $archivos

        ];

        Mail::to('carlos.mellado@insbaixcamp.cat')->send(new EnviarMail($data));

    }
    public function emailProv ($request) {


        $proveedor = DB::table('proveedores')->where('id', $request)->first();
        $adminfinca = DB::table('users')->where('id', $proveedor->id_admin)->first();


        $data = [
            'name' => 'Mellado Cardoner',
            'verification_code' => 'hola',
            'proveedor' => $proveedor,
            'adminfinca' => $adminfinca

        ];

        Mail::to($proveedor->email)->send(new EnviarMail($data));

        return redirect()->back();

    }

}
