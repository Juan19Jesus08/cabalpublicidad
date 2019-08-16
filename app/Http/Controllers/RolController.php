<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RolController extends Controller
{
   /* public function index()
	{
		//$data = Rol::all();
		$data=DB::select('select * from rol');
		//print_r ($data);
		//exit();
		return view('/principal/rol',compact('data'))->withData($data);
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	}*/

    public function index()
	{
		//$data = Rol::all();
		$videos_populares=DB::select('SELECT cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso GROUP BY cursos.id_curso ORDER BY(vendidos) desc limit 6 ');
        $videos_recientes=DB::select('SELECT cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc limit 6 ');

        //print_r ($data);
		//exit();
		return view('/principal/index',compact('videos_populares','videos_recientes'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	}

	/*public function mostrar_cursos()
	{
		$videos_cursos=DB::select('SELECT cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion)');
		return view ('/principal/cursos',compact('videos_cursos'));
	}*/


}