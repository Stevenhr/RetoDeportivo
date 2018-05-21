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

Route::get('/organizaciones', function () {
    return view('Administrador/organizaciones');
});

Route::post('agregarEvento','Administrador\controladorAdmin@agregarEvento');