<?php

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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cache', function() {
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    return "Caché limpio";
})->name('cache');

Route::group(['middleware' => ['auth'] ], function(){
    Route::resource('users', 'usuarioController');
    Route::resource('productos', 'productoController');
    Route::resource('materiales', 'materialController');
    Route::resource('ventas', 'ventaController');
    Route::resource('roles', 'rolController');
    Route::resource('unidad', 'unidadController');
    Route::resource('empleados', 'empleadoController');
    Route::resource('marca', 'marcaController');
});

Route::get('/notificaciones', 'usuarioController@notificaciones')
->name('notificaciones');
