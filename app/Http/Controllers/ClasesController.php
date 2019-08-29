<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ClasesController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	  }	
	  
    public function clases_mostrar()
	{
		$clases=DB::select('SELECT clases.id_clase,clases.nombre,clases.url,clases.descripcion,clases.duracion,cursos.nombre as curso FROM clases inner join cursos on cursos.id_curso=clases.id_curso');
		return view('/Admin/Clases/index',compact('clases'));
    }

	public function clases_eliminar()
		{
			return view('/Admin/Clases/delete');
		}

	public function eliminar(Request $input)
    {
		$categoria = $input['curso_show'];
		$id=$input['id_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM clases WHERE id_clase='$id'");
	
	
		return redirect()->action('ClasesController@clases_mostrar')->withInput();
	
		}
	

		public function clases_nuevo()
		{
			return view('/Admin/Clases/insert');
		}
	
	public function insertar(Request $input)
	{
	$nombre = $input['nombre_show'];
	$url = $input['url_show'];
	$descripcion = $input['descripcion_show'];
	$curso = $input['curso_show'];
    $duracion='00:00:00';
    echo $nombre."   ".$url."   ".$descripcion."   ".$curso."   ".$duracion;
   
    
	$query=DB::insert('insert into clases (id_clase,nombre,url,descripcion,duracion,id_curso) values (?, ?, ?, ?, ?, ?)', [null, $nombre,$url,$descripcion,$duracion,$curso]);
    return redirect()->action('ClasesController@clases_mostrar')->withInput();

	}

	public function clases_editar()
		{
			return view('/Admin/Clases/edit');
		}

	public function actualizar(Request $input)
	{
		$id = $input['id_show'];
        $nombre = $input['nombre_show'];
        $url = $input['url_show'];
		$descripcion = $input['descripcion_show'];
		$duracion = $input['duracion_show'];
		$curso = $input['curso_show'];
	$query=DB::update("update  clases set nombre='$nombre',url='$url',descripcion='$descripcion',duracion='$duracion',id_curso=$curso where id_clase=?",[$id]);


	return redirect()->action('ClasesController@clases_mostrar')->withInput();

	}
}
