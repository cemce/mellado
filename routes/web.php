<?php


use App\Http\Controllers\AdminFincaController;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\ComunidadController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ArchivosController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignarController;
use App\Http\Controllers\ChecklistController;
use App\Http\Controllers\VistaProveedor;


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
Route::get('/proveedores/asignar' , [ProveedorController::class, 'asignar'])->name('proveedor.asignar');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('checklist/{comunidad}', )
Route::get('/', function () {
    return view('/auth/login');
});

Route::post('/archivo/crear' , [ArchivosController::class, 'store'])->name('archivo.store');
Route::get('/exportpdf/{comunidade}' , [ComunidadController::class , 'exportPDF'] )->name('comunidades.exportpdf');
Route::get('/exportpdf/{proveedor}', [ProveedorController::class , 'export'])->name('proveedor.exportpdf');
Route::post('/proveedores/asignados' , [AsignarController::class, 'asignar'])->name('asignar.proveedor');


Route::get('/proveedores/comunidad/{comunidade}/{id}' , [ProveedorController::class, 'archivos'])->name('archivos.proveedor');


//Rutas para que el proveedor pueda ver todo aquello que necesita, como subir ficheros
Route::get('/listado' ,  [VistaProveedor::class, 'index'])->name('vista.proveedor');
Route::get('/propiedades/comunidad/{comunidade}' , [VistaProveedor::class, 'show'])->name('vistaproveedor.show');


//Ver todas las checklist de la comunidad
Route::get('/checklist/{comunidade}' , [ChecklistController::class, 'todos'])->name('todos.checklist');

//Todas las opciones de la checklist
Route::get('/checklist/{comunidade}/horizontal' , [ChecklistController::class , 'horizontal'])->name('horizontal.checklist');


Route::get('/checklist/{comunidade}/ascensores' , [ChecklistController::class , 'ascensores'])->name('ascensores.checklist');


Route::get('/checklist/{comunidade}/calderas' , [ChecklistController::class , 'calderas'])->name('calderas.checklist');


Route::get('/checklist/{comunidade}/cuadroelectrico' , [ChecklistController::class , 'cuadro'])->name('cuadro.checklist');


Route::get('/checklist/{comunidade}/contadores' , [ChecklistController::class , 'contadores'])->name('contadores.checklist');


Route::get('/checklist/{comunidade}/extintores' , [ChecklistController::class , 'extintores'])->name('extintores.checklist');


Route::get('/checklist/{comunidade}/iluminacion'  , [ChecklistController::class , 'iluminacion'])->name('iluminacion.checklist');


Route::get('/checklist/{comunidade}/piscina' , [ChecklistController::class , 'piscina'])->name('piscina.checklist');


Route::get('/checklist/{comunidade}/emergencia' , [ChecklistController::class , ' emergencia'])->name('emergencia.checklist');


Route::get('/checklist/{comunidade}/terraza' , [ChecklistController::class , 'terraza'])->name('terraza.checklist');




