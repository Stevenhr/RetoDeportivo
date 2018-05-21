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

Route::post('tablas','Reporte\Controlador_Reportes@prueba');
Route::post('/excel','PaginaWeb\controlador_paginaWeb@archivo_excel');