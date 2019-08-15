<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RolController extends Controller
{
    public function index()
	{
		//$data = Rol::all();
		$data=DB::select('select * from rol');
		//print_r ($data);
		//exit();
		return view('/principal/rol',compact('data'))->withData($data);
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

	}
}


	


