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



Route::get('/', function () {
    return view('master');
});

Route::get('/welcome2', function () { 
    return view('Palmare/welcome2'); 
}); 
 
Route::resource('/jugadores', 'Palmare\jugadoresController'); 
Route::resource('/equipos', 'Palmare\equiposController'); 
Route::post('/palmareJugadores', 'Palmare\palmareJugadoresController@create');
//Route::resource('Palmare/palmareEquipos', 'controladorPalmareEquipo');
//Route::resource('Palmare/palmareJugadores', 'controladorPalmareJugador');
