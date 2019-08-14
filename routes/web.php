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
    return view('/principal/index');
});


Route::get('/cursos', function () {
    return view('/principal/cursos');
});

Route::get('/registrar', function () {
    return view('/principal/registrar');
});

Route::get('/login', function () {
    return view('/principal/iniciar_sesion');
});

Route::get('/acerca_de', function () {
    return view('/principal/acerca_de');
});