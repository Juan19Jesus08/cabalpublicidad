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
		$videos_populares=DB::select('select cursos.nombre, cursos.descripcion,cursos.precio, IFNULL(count(adquirir.id_curso),0) as vendidos, IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion_curso from cursos LEFT JOIN adquirir on cursos.id_curso=adquirir.id_curso GROUP by (adquirir.id_curso) DESC LIMIT 6');
        $videos_recientes=DB::select('select cursos.nombre, cursos.descripcion,cursos.precio, IFNULL(count(adquirir.id_curso),0) as vendidos, IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion_curso from cursos LEFT JOIN adquirir on cursos.id_curso=adquirir.id_curso GROUP by (adquirir.id_curso) ORDER BY(cursos.fecha_creacion) DESC LIMIT 6');

        //print_r ($data);
		//exit();
		return view('/principal/rol',compact('videos_populares','videos_recientes'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	}
}