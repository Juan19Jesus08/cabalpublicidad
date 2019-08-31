<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class AdquirirController extends Controller
{
   

    public function añadir_comentario(Request $input)
	{
	$email = $input['email_show'];
    $comentario = $input['comentario_show'];
	$curso=$input['curso_show'];
	
	
	$cursos=DB::select("SELECT cursos.id_curso FROM cursos where cursos.nombre='$curso'" );
	foreach($cursos as $item)
	{
		$id_curso=$item->id_curso;
	}
	
	$adquirir=DB::select("SELECT * FROM adquirir where adquirir.email='$email' and adquirir.id_curso=$id_curso" );
	print_r($adquirir);
	//$query=DB::insert('insert into adquirir (email,id_curso,fecha_de_adquisicion,avance,certificado,comentario,calificacion) values (?, ?, ?, ?, ?, ?, ?)', [$email, 2,null,null,null,$comentario,null]);
	$query=DB::update("update  adquirir set comentario='$comentario' where id_curso=? and email=? ",[$id_curso,$email]);
	return redirect("/mis_clases?clase_de=$curso");
	
	

	}

	

	
}
