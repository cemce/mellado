<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class ChecklistController extends Controller
{


    public function todos ($comunidad) {

        $comunidades = DB::table('comunidades')->where('comunidad' , $comunidad)->first();

        return view ('checklist.todos' , compact('comunidades'));

    }
}
