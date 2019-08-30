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
Route::get('/Admin_categoria','CategoriaController@categoria_mostrar')->middleware('admin:1')->name('Admin_categoria');

Route::get('/Admin_categoria_borrar','CategoriaController@categoria_eliminar')->middleware('admin:1')->name('Admin_categoria_borrar');
Route::post('/Admin_categoria_borrar','CategoriaController@eliminar');

Route::get('/Admin_categoria_nuevo','CategoriaController@categoria_nuevo')->middleware('admin:1')->name('Admin_categoria_nuevo');
Route::post('/Admin_categoria_nuevo','CategoriaController@insertar');

Route::get('/Admin_categoria_editar','CategoriaController@categoria_editar')->middleware('admin:1')->name('Admin_categoria_editar');
Route::post('/Admin_categoria_editar','CategoriaController@actualizar');
////////////////////////////////////////////////////////////////////////////////////////////////
/*     RUTAS PARA ADMIN USUARIO*/
Route::get('/Admin_usuario','UsuarioController@usuario_mostrar')->middleware('admin:1')->name('Admin_usuario');

Route::get('/Admin_usuario_borrar','UsuarioController@usuario_eliminar')->middleware('admin:1')->name('Admin_usuario_borrar');
Route::post('/Admin_usuario_borrar','UsuarioController@eliminar');

Route::get('/Admin_usuario_nuevo','UsuarioController@usuario_nuevo')->middleware('admin:1')->name('Admin_usuario_nuevo');
Route::post('/Admin_usuario_nuevo','UsuarioController@insertar');

Route::get('/Admin_usuario_editar','UsuarioController@usuario_editar')->middleware('admin:1')->name('Admin_usuario_editar');
Route::post('/Admin_usuario_editar','UsuarioController@actualizar');
//////////////////////////////////////////////////////////////////////////////////////
/*     RUTAS PARA ADMIN CLASES*/
Route::get('/Admin_clases','ClasesController@clases_mostrar')->middleware('admin:1')->name('Admin_clases');

Route::get('/Admin_clases_borrar','ClasesController@clases_eliminar')->middleware('admin:1')->name('Admin_clases_borrar');
Route::post('/Admin_clases_borrar','ClasesController@eliminar');

Route::get('/Admin_clases_nuevo','ClasesController@clases_nuevo')->middleware('admin:1')->name('Admin_clases_nuevo');
Route::post('/Admin_clases_nuevo','ClasesController@insertar');

Route::get('/Admin_clases_editar','ClasesController@clases_editar')->middleware('admin:1')->name('Admin_clases_editar');
Route::post('/Admin_clases_editar','ClasesController@actualizar');

////////////////////////////////////////////////////////////////////////////////
/*     RUTAS PARA ADMIN CURSOS*/
Route::get('/Admin_cursos','CursosController@cursos_mostrar')->middleware('admin:1')->name('Admin_cursos');

Route::get('/Admin_cursos_borrar','CursosController@cursos_eliminar')->middleware('admin:1')->name('Admin_cursos_borrar');
Route::post('/Admin_cursos_borrar','CursosController@eliminar');

Route::get('/Admin_cursos_nuevo','CursosController@cursos_nuevo')->middleware('admin:1')->name('Admin_cursos_nuevo');
Route::post('/Admin_cursos_nuevo','CursosController@insertar');

Route::get('/Admin_cursos_editar','CursosController@cursos_editar')->middleware('admin:1')->name('Admin_cursos_editar');
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
Route::post('/iniciar_sesion','LoguinController@Login');
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

Route::get('/mi','AdquirirController@mostrar_comentarios');
Route::post('/mi','AdquirirController@añadir_comentario');

/*rutas para el cliente*/
Route::get('/perfil','Cursos_CompletadosController@perfil')->middleware('cliente:2')->name('perfil');
//////////////////

Route::get('/rol','RolController@procedimiento_almacenado');
Route::get('/cerrar_sesion','UsuarioController@Logout');