<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdquirirController extends Controller
{
    public function mostrar_comentarios()
	{
		
		$comentarios=DB::select('SELECT * FROM adquirir');
      
        //print_r ($category);
		//exit();
		return view('/cliente_principal/clases_registrado',compact('comentarios'));
		//return ('/Rol/Rol')->withData($data);
		//return view('rol',compact('rol'));

    }

    public function añadir_comentario(Request $input)
	{
	$email = $input['email_show'];
    $comentario = $input['comentario_show'];
    
	
   
    
	$query=DB::insert('insert into adquirir (email,id_curso,fecha_de_adquisicion,avance,certificado,comentario,calificacion) values (?, ?, ?, ?, ?, ?, ?)', [$email, 2,null,null,null,$comentario,null]);
    return redirect()->action('AdquirirController@mostrar_comentarios')->withInput();

	}
}
