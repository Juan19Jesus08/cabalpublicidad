<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriaController extends Controller
{
    
	public function index()
	{
		
		$category=DB::select('SELECT categoria.descripcion as category FROM categoria');
      
        print_r ($category);
		exit();
		return view('welcome',compact('category'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	}
    
}
