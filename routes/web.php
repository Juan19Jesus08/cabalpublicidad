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
Route::get('/Admin_categoria','CategoriaController@categoria_mostrar');

Route::delete('/Admin_categoria_borrar/{id}','CategoriaController@eliminar');


Route::get('/Admin_categoria_nuevo', function () {
    return view('/Admin/Categoria/insert');
});

Route::get('/Admin_categoria_editar', function () {
    return view('/Admin/Categoria/edit');
});
//////////////////////////////////////////////////////////////////////////////
Route::get('/rol', function () {
    return view('/principal/rol');
});

Route::get('/clases', function () {
    return view('/principal/clases');
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

Route::get('/iniciar_sesion', function () {
    return view('/principal/iniciar_sesion');
});

Route::get('/registrar', function () {
    return view('/principal/registrar');
});



Route::get('/','RolController@index');
Route::get('/todos','CursosController@cursos');

