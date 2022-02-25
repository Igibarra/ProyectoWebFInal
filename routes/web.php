<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiciosController;
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

Route::get('/', function (){
    return view('index');
})->name('index');

/*Servicios*/
/*Route::resource('servicios','ServiciosController');*/
Route::get('servicios','ServiciosController@index')->name('servicios.index');  
Route::get('/servicios/{id}','ServiciosController@show')->name('servicios.show');


/*Servicios*/
/*Route::get('servicios',function(){
    return view('/servicios/index');
})->name('servicios');*/

Route::get('formateo',function(){
    return view('Formateo');
})->name('formateo');

Route::get('cambio',function(){
    return view('Cambio');
})->name('cambio');

Route::get('mantenimiento',function(){
    return view('Mantenimiento');
})->name('mantenimiento');

Route::get('instala',function(){
    return view('instala');
})->name('instala');


/*Oficce*/

Route::get('office',function(){
    return view('Office');
})->name('office');

/*Punto y Venta*/

Route::get('punto',function(){
    return view('punto');
})->name('punto');


/*Acerca de*/
Route::get('acerca',function(){
    return view('Acerca');
})->name('acerca');

Route::get('mision',function(){
    return view('Mision');
})->name('mision');

Route::get('quienes',function(){
    return view('Quienes');
})->name('quienes');

Route::get('vision',function(){
    return view('Vision');
})->name('vision');




/**Contacto*/

Route::get('contacto',function(){
    return view('Contacto');
})->name('contacto');


/**Login**/

Route::get('login',function(){
    return view('Login');
})->name('login');



/*Errores*/

/*Result.blade.php*/
Route::get('result',function(){
    return view('Result');
})->name('result');