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


    
}