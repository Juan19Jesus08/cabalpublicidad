<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RolController extends Controller
{
    public function index()
	{
		
		$data=DB::select('select * from rol');
		
		return view('/principal/rol',compact('data'))->withData($data);
		

	}
}


	


