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
    return view('welcome');
});

Route::get('/ejemplo1', function () {
    return 'Hola todos';
});

Route::get('/palafox', function () {
    return 'Hola palafox';
});

Route::get('saludos/{nombre?}', function ($nombre=" por favor escribe tu nombre") {
    return 'Hola '.$nombre;
});

Route::get('/ejemplo2', 'ejemplo1@index');

Route::resource('/productos','ProductosController');
