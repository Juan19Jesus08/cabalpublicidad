<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;


class Cursos_CompletadosController extends Controller
{
 
    public function mi_password()
    {
        return view('/cliente_principal/contraseña');
    }

    public function mi_nombre()
    {
        return view('/cliente_principal/nombre_usuario');
    }

    public function mi_clase()
    {
        return view('/cliente_principal/clases_registrado2');
    }

    public function mis_clases()
    {
        return view('/cliente_principal/clases_registrado');
    }
    
    public static function mostrar_cursos()
    {
   	 $correo=Session::get('email');
   	 $cursos=DB::select("SELECT clases.url,cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso inner join clases on clases.id_curso=cursos.id_curso inner join usuario on usuario.email=adquirir.email where usuario.email='$correo' GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc ");
 	 
    	return view('/cliente_principal/mis_cursos',compact('cursos'));
    }
    
   
    public function imprimir(Request $input)
	{
        $email = $input['email_show'];
        $nombre_curso= $input['curso_show'];
        echo $email."    ".$nombre_curso;

        $nombres=DB::select("SELECT * from usuario where usuario.email='$email' ");
        $adquirir=DB::select("SELECT * from adquirir where adquirir.email='$email' ");
         $fecha=$adquirir[0]->fecha_finalizacion;
         $nombre_usuario=$nombres[0]->nombre;
        //mis_clases?clase_de=curso de laravel
        
        
        $pdf = \PDF::loadView('/cliente_principal/pdf', compact('nombre_usuario','fecha','nombre_curso'));
        return $pdf->download('certificado_de_finalizacion.pdf');

    }
  
  

  
  
	
}
