<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CursosController extends Controller
{
    public function cursos()
	{
		//$data = Rol::all();
		
        $videos=DB::select('SELECT clases.url,cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso inner join clases on clases.id_curso=cursos.id_curso GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc  ');

        //print_r ($data);
		//exit();
		return view('/principal/todos_cursos',compact('videos'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	} 

}
