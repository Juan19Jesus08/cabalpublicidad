<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoriaController extends Controller
{
    
	public function index()
	{
		$category=DB::select('SELECT categoria.descripcion FROM categoria');
		return view ('welcome',compact('category'));
    }
    
}
