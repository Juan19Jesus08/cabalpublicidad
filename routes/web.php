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
/*     RUTAS PARA ADMIN CATEGORIA*/
Route::get('/Admin_categoria','CategoriaController@categoria_mostrar');

//Route::delete('/Admin_categoria_borrar/{id}','CategoriaController@eliminar')->name('Admin_categoria_borrar');
;

//Route::get('/Admin_categoria_borrar','CategoriaController@eliminar');

Route::get('/Admin_categoria_borrar', function () {
    return view('/Admin/Categoria/delete');
});
Route::post('/Admin_categoria_borrar','CategoriaController@eliminar');

Route::get('/Admin_categoria_nuevo', function () {
    return view('/Admin/Categoria/insert');
});
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');

Route::get('/Admin_categoria_editar', function () {
    return view('/Admin/Categoria/edit');
});
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');
////////////////////////////////////////////////////////////////////////////////////////////////
/*     RUTAS PARA ADMIN USUARIO*/
Route::get('/Admin_usuario','UsuarioController@usuario_mostrar');

Route::get('/Admin_usuario_borrar', function () {
    return view('/Admin/Usuario/delete');
});
Route::post('/Admin_usuario_borrar','UsuarioController@eliminar');

Route::get('/Admin_usuario_nuevo', function () {
    return view('/Admin/Usuario/insert');
});
Route::post('/Admin_usuario_nuevo','UsuarioController@insertar');

Route::get('/Admin_usuario_editar', function () {
    return view('/Admin/Usuario/edit');
});
Route::post('/Admin_usuario_editar','UsuarioController@actualizar');
//////////////////////////////////////////////////////////////////////////////////////
/*     RUTAS PARA ADMIN CLASES*/
Route::get('/Admin_clases','ClasesController@clases_mostrar');

Route::get('/Admin_clases_borrar', function () {
    return view('/Admin/Clases/delete');
});
Route::post('/Admin_clases_borrar','ClasesController@eliminar');

Route::get('/Admin_clases_nuevo', function () {
    return view('/Admin/Clases/insert');
});
Route::post('/Admin_clases_nuevo','ClasesController@insertar');

Route::get('/Admin_clases_editar', function () {
    return view('/Admin/Clases/edit');
});
Route::post('/Admin_clases_editar','ClasesController@actualizar');

////////////////////////////////////////////////////////////////////////////////
/*     RUTAS PARA ADMIN CURSOS*/
Route::get('/Admin_cursos','CursosController@cursos_mostrar');

Route::get('/Admin_cursos_borrar', function () {
    return view('/Admin/Cursos/delete');
});
Route::post('/Admin_cursos_borrar','CursosController@eliminar');

Route::get('/Admin_cursos_nuevo', function () {
    return view('/Admin/Cursos/insert');
});
Route::post('/Admin_cursos_nuevo','CursosController@insertar');

Route::get('/Admin_cursos_editar', function () {
    return view('/Admin/Cursos/edit');
});
Route::post('/Admin_cursos_editar','CursosController@actualizar');
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


/*Ruta para el login*/
Route::get('/iniciar_sesion', function () {
    return view('/principal/iniciar_sesion');
    
});
Route::post('/iniciar_sesion','UsuarioController@Login');
///////////////////////////////////////////

Route::get('/acerca_de', function () {
    return view('/principal/acerca_de');
});


/*Ruta para el registrarse*/
Route::get('/registrar', function () {
    return view('/principal/registrar');
});
Route::post('/registrar','UsuarioController@Registrar');
///////////////////////////////////////////

Route::get('/','RolController@index');
Route::get('/todos','CursosController@cursos');

Route::get('/mis_cursos','AdquirirController@mostrar_comentarios');
Route::post('/mis_cursos','AdquirirController@añadir_comentario');