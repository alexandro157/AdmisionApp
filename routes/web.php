<?php

use App\Models\User;

use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|14  20 
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Admin/index');
})->middleware('auth');


Route::get('/users', function(){
    return view('Admin/userContent');
});
Route::get('/Suscripciones', function(){
    return view('Admin/suscripcionesContent');
});
Route::get('/Preguntas', function(){
    return view('Admin/PreguntasContent');

});




use Laravel\Socialite\Facades\Socialite;


use App\Http\Controllers\LoginController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\RegistroController;
use Illuminate\Support\Facades\Auth;

Route::get('examen',[ExamenController::class, 'examen']);


Route::get('/Universidad', function(){
    return view('Admin/Universidad');

});

Route::get('/Carrera', function(){
    return view('Admin/Carrera');

});

Route::get('/Area', function(){
    return view('Admin/Area');

});


Route::get('/ExamenA', function(){
    return view('Admin/ExamenA');

});



Route::get('/RegistroExamen', function(){
    return view('Admin/Examen');

});


Route::get('/Bloque', function(){
    return view('Admin/Bloque');

});


Route::get('/Pago', function(){
    return view('Pago');

});



Route::get('/Registro', function(){
    return view('Registro');

});



Route::get('/Resultados', function(){
    return view('resultados');

});

Route::get('/Pagina', function(){
    return view('pagina');

});


Route::get('/Principal', function(){
    return view('Principal');

});



Route::get('/Area-A-uni', function(){
    return view('Admin/template/Area-A-uni');

});

Route::get('/Area-A-unmsm', function(){
    return view('Admin/template/Area-A-unmsm');

});

Route::get('/Area-B-uni', function(){
    return view('Admin/template/Area-B-uni');

});

Route::get('/Area-B-unmsm', function(){
    return view('Admin/template/Area-B-unmsm');

});

Route::get('/Area-C-uni', function(){
    return view('Admin/template/Area-C-uni');

});

Route::get('/Area-C-unmsm', function(){
    return view('Admin/template/Area-C-unmsm');

});

Route::get('/Area-D-unmsm', function(){
    return view('Admin/template/Area-D-unmsm');

});

Route::get('/Area-E-unmsm', function(){
    return view('Admin/template/Area-E-unmsm');

});


Route::get('/menubar', function(){
    return view('Admin/template/menubar');

});

Route::get('/model', function(){
    return view('Admin/template/model');

});

Route::get('/UNI', function(){
    return view('Admin/template/UNI');

});

Route::get('/universidades', function(){
    return view('Admin/template/universidades');

});

Route::get('/UNMSM', function(){
    return view('Admin/template/UNMSM');

});

Route::get('/usuario', function(){
    return view('Admin/template/usuario');

});



Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('admin')
    ->name('admin');


Route::get('/Registro', [RegistroController::class, 'create'])
    ->middleware('guest')
    ->name('Registro');

Route::post('/Registro', [RegistroController::class, 'store'])
    ->name('Registro.store');


Route::get('/login', [LoginController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [LoginController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth') 
    ->name('login.destroy');

Route::get('/admin' ,[AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');








