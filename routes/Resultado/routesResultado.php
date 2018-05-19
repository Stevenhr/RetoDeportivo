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
Route::get('fixture','Resultado\Partidos_eventoController@partidosEvento');
Route::post('RegistroPartidos','Resultado\Partidos_eventoController@registroPartidos');
Route::post('ModificarPartido','Resultado\Partidos_eventoController@modificarPartidos');
Route::post('EliminarPartido','Resultado\Partidos_eventoController@eliminarPartidos');

Route::get('resultados','Resultado\resultadosController@partidosEvento');
Route::post('RegistroResultados','Resultado\resultadosController@registroResultado');
Route::post('ModificarResultados','Resultado\resultadosController@modificarResultado');
Route::post('EliminarResultado','Resultado\resultadosController@eliminarResultado');

Route::get('estadisticas','Resultado\estadisticasController@partidosEvento');
Route::post('RegistroEstadisticas','Resultado\estadisticasController@agregarEstadisticas');
Route::post('ModificarEstadisticas','Resultado\estadisticasController@modificarEstadisticas');
Route::post('EliminarEstadisticas','Resultado\estadisticasController@eliminarEstadisticas');