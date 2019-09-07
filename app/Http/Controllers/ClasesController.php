<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
$duracion;
class ClasesController extends Controller
{
	/*public function __construct(){
		$this->middleware('auth');
	  }*/	

	  
    public function clases_mostrar()
	{
		$clases=DB::select('SELECT clases.id_clase,clases.nombre,clases.url,clases.descripcion,clases.duracion,cursos.nombre as curso,cursos.id_curso FROM clases inner join cursos on cursos.id_curso=clases.id_curso');
		return view('/Admin/Clases/index',compact('clases'));
    }

	public function clases_eliminar()
		{
			return view('/Admin/Clases/delete');
		}

	public function eliminar(Request $input)
    {
		
		$id=$input['id_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM clases WHERE id_clase='$id'");
	
	
		return redirect()->action('ClasesController@clases_mostrar')->withInput();
	
		}
	

		public function clases_nuevo()
		{
			return view('/Admin/Clases/insert');
		}
	
	public function insertar(Request $input)
	{
	$nombre = $input['nombre_show'];
	$url = $input['url_show'];
	
	$curso = $input['curso_show'];
	
	$resultado='';
		
		$apikey='AIzaSyBU1lZtClzanCeW37ILQ2UB70X-VatLSps';
		$videoID=$url;
	   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey");
	   $duration = json_decode($dur, true);
		 foreach ($duration['items'] as $vidTime) 
		 { 
			 $vTime= $vidTime['contentDetails']['duration'];
		
		 }
		 $this->duracion=substr($vTime,  2 );
		 echo $vTime;
		 echo '<br/>';
		//echo $resultado;
		echo '<br/>';
		$horas='00';
		$minutos='00';
		$segundos='00';

			 $horas=$this->tiempo('H');
			 $minutos=$this->tiempo('M');
			 $segundos= $this->tiempo('S');

		echo 'imprimo horas ->'.$horas ;
		echo '<br/>';
		echo 'imprimo minutos ->'.$minutos ;
		echo '<br/>';
		echo 'imprimo segundos ->'.$segundos ;
		echo $resultado=$horas.':'.$minutos.':'.$segundos;
		
    
    
    
	$query=DB::insert('insert into clases (id_clase,nombre,url,duracion,id_curso) values ( ?, ?, ?, ?, ?)', [null, $nombre,$url,$resultado,$curso]);
	return redirect()->action('ClasesController@clases_mostrar')->withInput();
	
		

	}

	public function clases_editar()
		{
			return view('/Admin/Clases/edit');
		}

	public function actualizar(Request $input)
	{	
		$id=$input['id_show'];
        $nombre = $input['nombre_show'];
        $url = $input['url_show'];
		
		
		$curso = $input['curso_show'];
		$resultado='';
		
		$apikey='AIzaSyBU1lZtClzanCeW37ILQ2UB70X-VatLSps';
		$videoID=$url;
	   $dur = file_get_contents("https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=$videoID&key=$apikey");
	   $duration = json_decode($dur, true);
		 foreach ($duration['items'] as $vidTime) 
		 { 
			 $vTime= $vidTime['contentDetails']['duration'];
		
		 }
		 $this->duracion=substr($vTime,  2 );
		 echo $vTime;
		 echo '<br/>';
		//echo $resultado;
		echo '<br/>';
		$horas='00';
		$minutos='00';
		$segundos='00';

			 $horas=$this->tiempo('H');
			 $minutos=$this->tiempo('M');
			 $segundos= $this->tiempo('S');

		echo 'imprimo horas ->'.$horas ;
		echo '<br/>';
		echo 'imprimo minutos ->'.$minutos ;
		echo '<br/>';
		echo 'imprimo segundos ->'.$segundos ;
		echo $resultado=$horas.':'.$minutos.':'.$segundos;
		


		

	$query=DB::update("update  clases set nombre='$nombre',url='$url',duracion='$resultado',id_curso=$curso where id_clase=?",[$id]);
	
	return redirect()->action('ClasesController@clases_mostrar')->withInput();

	}


	public function tiempo($medida)
    {
        $i=0;
        $horas='';
        if(strpos($this->duracion, $medida))
        {
            
            for($i; $i < strlen ($this->duracion); $i++)
            {
                echo $this->duracion[$i];
                echo '<br/>';
                if($this->duracion[$i]!= $medida)
                {
                $horas = $horas.$this->duracion[$i];
                       //$this->duracion=’H48S’
                }
                    else
                        {    
                            break;
                        }
            }
         $this->duracion=substr($this->duracion, $i+1);

        }   
		
		else
		{
					$horas='00';
		}   
				
				return $horas;
		
        
    }

}
