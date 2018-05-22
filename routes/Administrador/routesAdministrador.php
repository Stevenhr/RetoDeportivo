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

//The fuck is this?
Route::get('/dfssd', function () {
    return view('welcome');
});


Route::get('/eventos', function () {
    return view('Administrador/eventos');
});


//Ruta para agregar un evento a la bd
Route::post('agregarEvento','Administrador\controladorAdmin@agregarEvento');

//Ruta para agregar una organización a la bd
Route::post('agregarOrganizacion','Administrador\controladorAdmin@agregarOrganizacion');


//Carga eventos en el formulario de organizaciones y retorna la view
Route::get('organizaciones','Administrador\controladorAdmin@cargarOrganizaciones');


//Carga organizaciones en el formulario de personas y retorna la view
Route::get('personas','Administrador\controladorAdmin@cargarPersonas');

