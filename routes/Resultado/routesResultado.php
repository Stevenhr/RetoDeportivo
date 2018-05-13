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
/*Route::get('/fixture', function () {
    return view('Resultados/Fixture');
});*/
Route::get('fixture','Resultado\resultadoController@resultadoPartidos');
//Route::get('fixture','resultadoController@resultadosPartidos');