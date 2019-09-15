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

	public function cursos_mostrar()
	{
		$cursos=DB::select('SELECT cursos.id_curso,cursos.nombre,cursos.descripcion,cursos.precio,categoria.descripcion as cate,cursos.fecha_creacion,categoria.id_categoria FROM cursos inner join categoria on cursos.id_categoria=categoria.id_categoria');
		
		return view('/Admin/Cursos/index',compact('cursos'));
    }


	public function cursos_eliminar()
		{
			return view('/Admin/Cursos/delete');
		}

	public function eliminar(Request $input)
    {
		$categoria = $input['curso_show'];
		$id=$input['id_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM cursos WHERE id_curso='$id'");
	
	
		return redirect()->action('CursosController@cursos_mostrar')->withInput();
	
		}
	
		public function cursos_nuevo()
		{
			return view('/Admin/Cursos/insert');
		}

	public function insertar(Request $input)
	{
	$nombre = $input['nombre_show'];
	$descripcion = $input['descripcion_show'];
	$precio = $input['precio_show'];
	$categoria = $input['categoria_show'];
	$fecha = $input['fecha_show'];

	$query=DB::insert('insert into cursos (id_curso,nombre,descripcion,precio,id_categoria,fecha_creacion) values (?, ?, ?, ?, ?, ?)', [null, $nombre,$descripcion,$precio,$categoria,$fecha]);
    return redirect()->action('CursosController@cursos_mostrar')->withInput();

	}

	public function cursos_editar()
		{
			return view('/Admin/Cursos/edit');
		}

	public function actualizar(Request $input)
	{
		$id = $input['id_show'];
		$nombre = $input['nombre_show'];
		$descripcion = $input['descripcion_show'];
		$precio = $input['precio_show'];
		$categoria = $input['categoria_show'];
		$fecha = $input['fecha_show'];

		//echo $nombre."   ".$descripcion."   ".$precio."   ".$categoria."   ".$fecha."  ".$id;

	$query=DB::update("update  cursos set nombre='$nombre',descripcion='$descripcion',precio=$precio,id_categoria=$categoria,fecha_creacion='$fecha' where id_curso=?",[$id]);


	return redirect()->action('CursosController@cursos_mostrar')->withInput();

	}

}
