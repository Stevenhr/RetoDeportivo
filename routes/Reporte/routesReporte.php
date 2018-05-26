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

Route::get('/prueba', function () {
    return view('Reportes/index');
});
Route::get('/actividades_usuario', function () {
    return view('Reportes/usuario');
});
Route::get('/reporte_organizaciones_registrados', function () {
    return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Organizaciones_Registrados');
});

Route::get('/reporte_eventos_registrados', function () {
    return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Eventos_Registrados');
});

Route::get('/reporte_pronosticos_registrados', function () {
    return view('Reportes/Imprimir_Reportes/Usuario/Reporte_Pronosticos_Registrados');
});


Route::post('reportes','Reporte\Controlador_Reportes@reportes');
Route::post('tablas','Reporte\Controlador_Reportes@prueba');
Route::post('/excel','PaginaWeb\controlador_paginaWeb@archivo_excel');
