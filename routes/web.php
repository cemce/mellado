<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminFincaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::post('/formulario', 'FormularioController@store')->name('formulario.store');


Route::resource('administrador', AdminFincaController::class);
Route::resource('formulario', FormularioController::class);
Route::resource('comunidades', ComunidadController::class);
Route::resource('proveedor', ProveedorController::class);


Route::post('comunidades/buscar', [ComunidadController::class, 'search'])->name('comunidades.search');
Route::post('administrador/buscar', [AdminFincaController::class, 'search'])->name('administrador.search');

Route::get('/enviaremail/{comunidade}' , [MailController::class , 'sendEmail'])->name('enviar.email');
Route::get('/enviarmail/{proveedor}', [MailController::class, 'emailProv'])->name('enviar.proveedor');


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('checklist/{comunidad}', )
Route::get('/', function () {
    return view('/auth/login');
});

Route::post('/archivo/crear' , [ArchivosController::class, 'store'])->name('archivo.store');
Route::get('/exportpdf/{comunidade}' , [ComunidadController::class , 'exportPDF'] )->name('comunidades.exportpdf');
Route::get('/exportpdf/{proveedor}', [ProveedorController::class , 'export'])->name('proveedor.exportpdf');





