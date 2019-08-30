<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;


class Cursos_CompletadosController extends Controller
{
 
    public function perfil()
    {
        return redirect()->action('RolController@index')->withInput();
    }
    
    public static function mostrar_cursos()
    {
   	 $correo=Session::get('email');
   	 $cursos=DB::select("select cursos.nombre from usuario inner join adquirir on usuario.email=adquirir.email inner join cursos on cursos.id_curso=adquirir.id_curso where usuario.email='$correo' ");
 	 
    	return $cursos;
	}
	
}
