<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;


class Cursos_CompletadosController extends Controller
{
 
    public function perfil()
    {
        $videos_populares=DB::select('SELECT clases.url,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso left join clases on clases.id_curso=cursos.id_curso GROUP BY cursos.id_curso ORDER BY(vendidos) desc limit 6 ');
        $videos_recientes=DB::select('SELECT clases.url,cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso inner join clases on clases.id_curso=cursos.id_curso GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc limit 6  ');

       
		return view('/cliente_principal/index',compact('videos_populares','videos_recientes'));
    }
    
    public static function mostrar_cursos()
    {
   	 $correo=Session::get('email');
   	 $cursos=DB::select("SELECT clases.url,cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso inner join clases on clases.id_curso=cursos.id_curso inner join usuario on usuario.email=adquirir.email where usuario.email='$correo' GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc ");
 	 
    	return view('/cliente_principal/mis_cursos',compact('cursos'));
    }
    
   
		
       
	
}
