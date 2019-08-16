<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriaController extends Controller
{
    
	public function index()
	{
		
		$category=DB::select('SELECT categoria.descripcion as cate FROM categoria');
      
        
		return view('welcome',compact('category'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	}
    
}
