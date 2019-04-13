<?php

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

$nameHost = request()->server('HTTP_HOST');

$host = \App\Host::where('host',$nameHost)->first();

$cuenta = $host->cuenta()->first();

$acciones = $cuenta->acciones()->get();

foreach ($acciones as $accion){

    if ($accion->method == '')
        Route::resource($accion->accion, $accion->controller);
    else {
        $metodo = $accion->method != '' ? '@' . $accion->method : '';
        $controller = $accion->controller . $metodo;
        Route::get($accion->accion, $controller);
    }
}

Route::get('/', $host->default_controller);

Auth::routes();

