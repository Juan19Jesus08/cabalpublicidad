<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;


class Cursos_CompletadosController extends Controller
{
 
    public function mi_password()
    {
        return view('/cliente_principal/contrasenia');
    }

    public function mi_nombre()
    {
        return view('/cliente_principal/nombre_usuario');
    }

    public function mi_clase()
    {
        return view('/cliente_principal/clases_registrado2');
    }

    public function mis_clases()
    {
        return view('/cliente_principal/clases_registrado');
    }
    
    public static function mostrar_cursos()
    {
   	 $correo=Session::get('email');
   	 $cursos=DB::select("SELECT clases.url,cursos.fecha_creacion,cursos.nombre,cursos.descripcion,cursos.precio,IFNULL(COUNT(adquirir.id_curso), 0)as vendidos,IFNULL(TRUNCATE(AVG(adquirir.calificacion),0),0) as calificacion FROM cursos LEFT JOIN adquirir ON cursos.id_curso = adquirir.id_curso inner join clases on clases.id_curso=cursos.id_curso inner join usuario on usuario.email=adquirir.email where usuario.email='$correo' GROUP BY cursos.id_curso ORDER BY(cursos.fecha_creacion) desc ");
 	 
    	return view('/cliente_principal/mis_cursos',compact('cursos'));
    }
    
   
    public function imprimir(Request $input)
	{
        $email= $_GET['email_show'];
        $id_curso=$_GET['curso_show'];
       
        $comprobar=DB::select("SELECT * from adquirir where adquirir.email='$email' and adquirir.id_curso=$id_curso ");
        
     

        if($comprobar[0]->certificado==1)
        {
            
            $cursos=DB::select("SELECT * from cursos where cursos.id_curso=$id_curso ");
            $nombres=DB::select("SELECT * from usuario where usuario.email='$email' ");
            $adquirir=DB::select("SELECT * from adquirir where adquirir.email='$email' and adquirir.id_curso=$id_curso");
             $fecha=$adquirir[0]->fecha_finalizacion;
             $nombre=$nombres[0]->nombre;
             $curso=$cursos[0]->nombre;
            //mis_clases?clase_de=curso de laravel
            
          
            $pdf = \PDF::loadView('/cliente_principal/pdf', compact('nombre','fecha','curso'));
            
            return $pdf->download('certificado_de_finalizacion.pdf');
        }
       
       

    }

    public function terminacion_clase()

    {
        $email= $_GET['email_show'];
        $curso=$_GET['curso_show'];
        $clase=$_GET['clase_show'];
        
        $mensaje="";
        $cursos=DB::select("SELECT * from cursos where cursos.nombre='$curso'");
        $clases=DB::select("SELECT * from clases where clases.nombre='$clase'");

        $id_curso=$cursos[0]->id_curso;
        $id_clase=$clases[0]->id_clase;

        $comprobar=DB::select("SELECT * from cursos_completados where cursos_completados.email='$email' and cursos_completados.id_curso=$id_curso and cursos_completados.id_clase=$id_clase");
        if(empty($comprobar)) {
           
            $query=DB::insert('insert into cursos_completados (id_clase,id_curso,email) values (?, ?, ?)', [$id_clase, $id_curso,$email]);
            $mensaje="Felicidades acabas de terminar una clase del curso!!"; 
           
            if($query)
            {
                $query2=DB::select("call comprobar_avance($id_curso,'$email')");
               
            }
            

            }
            else{
                $mensaje="Esta clase ya la habias terminado";
            }
        print_r($comprobar);
   // echo $mensaje;
   
        return redirect('/mi_clase?curso_de='.$curso.'&clase_de='.$clase.'&mensaje='.$mensaje);   
        

    }
   




  
  

  
  
	
}
