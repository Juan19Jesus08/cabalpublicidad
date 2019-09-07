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
Route::get('/iniciar_sesion', 'UsuarioController@mostrar_iniciar_sesion');
Route::post('/iniciar_sesion','LoguinController@Login');
///////////////////////////////////////////

Route::get('/acerca_de', function () {
    return view('/principal/acerca_de');
});


/*Ruta para el registrarse*/
Route::get('/registrar', 'UsuarioController@mostrar_registrar');
Route::post('/registro','UsuarioController@Registrar');


Route::get('/rol', 'RolController@ajaxRequest');

Route::post('/rol', 'RolController@ajaxRequestPost');
///////////////////////////////////////////

Route::get('/','RolController@index');//->middleware('cliente:2')->name('index');
Route::get('/todos','CursosController@cursos');




/*rutas para el cliente*/
//////////////


Route::get('/mis_cursos','Cursos_CompletadosController@mostrar_cursos')->middleware('cliente:2')->name('mis_cursos');
//////////////////
Route::post('/mis_clases','AdquirirController@añadir_comentario');


Route::get('/mis_clases','Cursos_CompletadosController@mis_clases')->middleware('cliente:2')->name('mis_clases');

////////////////////////////////
Route::post('/mi_clase','AdquirirController@añadir_comentario');


Route::get('/mi_clase','Cursos_CompletadosController@mi_clase')->middleware('cliente:2')->name('mi_clase');
///////////////////////////////////


Route::get('/mi_nombre','Cursos_CompletadosController@mi_nombre')->middleware('cliente:2')->name('mi_nombre');
Route::post('/mi_nombre','UsuarioController@Actualizar_nombre');


Route::get('/mi_password','Cursos_CompletadosController@mi_password')->middleware('cliente:2')->name('mi_password');
Route::post('/mi_password','UsuarioController@Actualizar_contraseña');
/*Fin de rutas para cliente*/


Route::get('/cerrar_sesion','UsuarioController@Logout');

//Route::get('/mi_contraseña','EmailController@email');


Route::get('/mi_contraseña', function () {
    return view('/principal/obtener_contraseña');
});
Route::post('/mi_contraseña','EmailController@obtener_contraseña');




//Route::post('/imprimir','Cursos_CompletadosController@imprimir');

Route::name('print')->get('/imprimir', 'Cursos_CompletadosController@imprimir');
/*Route::post('/terminacion_clase', function(Request $request){
    $curso = $request->curso;
        $clase = $request->clase;
        $email = $request->email;

        echo $curso."   ".$clase."   ".$email;
        $data=1;
        return response ()->json ( $data );
});*/

Route::get('/terminacion_clase','Cursos_CompletadosController@terminacion_clase')->name('terminacion_clase');

Route::get('/rol', 'RolController@ajaxRequest');

Route::post('/rol', 'RolController@ajaxRequestPost');