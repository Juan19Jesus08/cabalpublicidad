<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriaController extends Controller
{
   
	public function index()
	{
		
		$category=DB::select('SELECT categoria.descripcion as cate FROM categoria');
      
        //print_r ($category);
		//exit();
		return view('mostrar_categorias',compact('category'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

    }
    
    public static function mostrar_categorias()
    {
   	 
   	 $category=DB::select('SELECT categoria.descripcion as cate FROM categoria');
 	 
    	return $category;
	}
	

	public function categoria_mostrar()
	{
		$categorias=DB::select('SELECT * FROM categoria');
		return view('/Admin/Categoria/index',compact('categorias'));
    }
	
	public function categoria_eliminar()
	{
		return view('/Admin/Categoria/delete');
	}

	public function eliminar(Request $input)
    {
		$categoria = $input['categoria_show'];
		$id=$input['id_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM categoria WHERE id_categoria='$id'");
	
	
		return redirect()->action('CategoriaController@categoria_mostrar')->withInput();
	
		}
	
	
		public function categoria_nuevo()
		{
			return view('/Admin/Categoria/insert');
		}

	public function insertar(Request $input)
	{
    $categoria = $input['categoria_show'];
	//echo $categoria;
	
	$query=DB::insert('insert into categoria (id_categoria,descripcion) values (?, ?)', [null, $categoria]);
    return redirect()->action('CategoriaController@categoria_mostrar')->withInput();

	}


	public function categoria_editar()
		{
			return view('/Admin/Categoria/edit');
		}


	public function actualizar(Request $input)
	{
	$categoria = $input['categoria_show'];
	$id=$input['id_show'];
	//echo $categoria."   and   ".$id;

	
	
	$query=DB::update("update  categoria set descripcion='$categoria' where id_categoria=?",[$id]);


	return redirect()->action('CategoriaController@categoria_mostrar')->withInput();

	}

    
}