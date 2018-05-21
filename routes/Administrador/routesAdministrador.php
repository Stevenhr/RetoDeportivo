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

Route::get('/dfssd', function () {
    return view('welcome');
});
Route::get('/eventos', function () {
    return view('Administrador/eventos');
});

//Ruta para agregar evento a la bd
Route::post('agregarEvento','Administrador\controladorAdmin@agregarEvento');

//Ruta para cargar eventos en el formulario de organizaciones
Route::post('organizaciones','Administrador\controladorAdmin@cargarOrganizaciones');