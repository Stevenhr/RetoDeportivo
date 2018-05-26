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
Route::get('/actividades', function () {
    return view('Administrador/actividades');
});
Route::get('/actividadesUsuario', function () {
    return view('Administrador/actividadesUsuario');
});

//Ruta para agregar un evento a la bd
Route::post('agregarEvento','Administrador\controladorAdmin@agregarEvento');


//Carga eventos en el formulario de organizaciones y retorna la view
Route::get('organizaciones','Administrador\controladorAdmin@cargarOrganizaciones');

//Ruta para agregar una organización a la bd
Route::post('agregarOrganizacion','Administrador\controladorAdmin@agregarOrganizacion');


//Carga organizaciones en el formulario de personas y retorna la view
Route::get('personas','Administrador\controladorAdmin@cargarPersonas');

//Ruta para agregar una organización a la bd
Route::post('agregarPersona','Administrador\controladorAdmin@agregarPersona');


//Carga los modulos en el formulario de actividades y retorna la view
Route::get('actividades','Administrador\controladorAdmin@cargarActividades');

//Ruta para agregar una actividad a la bd
Route::post('agregarActividad','Administrador\controladorAdmin@agregarActividad');

//Ruta para deshabilitar modulos
Route::post('deshabilitar','Administrador\controladorAdmin@deshabilitarModulo');

//Ruta para Eliminar Eventos
Route::post('eliminarEventos','Administrador\controladorAdmin@eliminarEventos');

//Ruta para Modificar Eventos
Route::post('modificarEventos','Administrador\controladorAdmin@modificarEventos');

//Ruta para Modificar Eventos Parte 2
Route::post('editarEventos','Administrador\controladorAdmin@editarEventos');

//Ruta para Eliminar Organizaciones
Route::post('eliminarOrganizaciones','Administrador\controladorAdmin@eliminarOrganizaciones');

//Ruta para Modificar Organizaciones
Route::post('modificarOrganizaciones','Administrador\controladorAdmin@modificarOrganizaciones');

//Ruta para Modificar Organizaciones Parte 2
Route::post('editarOrganizaciones','Administrador\controladorAdmin@editarOrganizaciones');

//Ruta para Eliminar Personas
Route::post('eliminarPersonas','Administrador\controladorAdmin@eliminarPersonas');

//Ruta para Modificar Personas
Route::post('modificarPersonas','Administrador\controladorAdmin@modificarPersonas');

//Ruta para Modificar Personas Parte 2
Route::post('editarPersonas','Administrador\controladorAdmin@editarPersonas');