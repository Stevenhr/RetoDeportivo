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
    return view('PaginaWeb/inicio');
});
Route::get('/inicio', function () {
    return view('PaginaWeb/inicio');
});
Route::get('/como_funciona', function () {
    return view('PaginaWeb/como_funciona');
});
Route::get('/reglas_del_juego', function () {
    return view('PaginaWeb/reglas_del_juego');
});
Route::get('/contactanos', function () {
    return view('PaginaWeb/contactanos');
});
Route::get('/usuarioIniciado', function () {
    return view('welcome');
});
Route::get('/vista', function () {
    return view('vista');
});


Route::post('/inicio_de_sesion','PaginaWeb\controlador_paginaWeb@inicioSesion');
Route::post('/solicitud_registro','PaginaWeb\controlador_paginaWeb@solicitudRegistro');
Route::post('/cerrar_sesion','PaginaWeb\controlador_paginaWeb@cerrarSesion');
