<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function logout(Request $request) {
        return redirect('login')->with(Auth::logout());
      }

    protected function redirectTo()
    {
        if (Auth::user()->role == 'adminfinca') {
            return('/administrador');
        }

        if (Auth::user()->role == "admin") {
            return ('/comunidades');
        }

        if (Auth::user()->role == "comercial") {
            return ('/comunidades');
        }
        if (Auth::user()->role == "proveedor"){
            return ('/listado');
        }

        return '/home';
    }

}
