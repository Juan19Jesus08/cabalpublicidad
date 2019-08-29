<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class UsuarioController extends Controller
{
    public function usuario_mostrar()
	{
		$usuarios=DB::select('SELECT usuario.email,usuario.nombre,usuario.password,rol.descripcion FROM usuario inner join rol on usuario.id_rol=rol.id_rol');
		return view('/Admin/Usuario/index',compact('usuarios'));
    }

	public function eliminar(Request $input)
    {
		
		$id=$input['email_show'];
		//echo $categoria."   and   ".$id;
	
		
		$query=DB::delete("DELETE FROM usuario WHERE email='$id'");
	
	
		return redirect()->action('UsuarioController@usuario_mostrar')->withInput();
	
	}
	
	
	public function insertar(Request $input)
	{
	$nombre = $input['nombre_show'];
	$email = $input['email_show'];
	$password = $input['contrasenia_show'];
	$rol = $input['rol_show'];
    
   
    
	$query=DB::insert('insert into usuario (email,nombre,password,id_rol) values (?, ?, ?, ?)', [$email, $nombre,$password,$rol]);
    return redirect()->action('UsuarioController@usuario_mostrar')->withInput();

	}


	public function actualizar(Request $input)
	{
		$email = $input['id_show'];
        $nombre = $input['nombre_show'];
        $password = $input['contrasenia_show'];
		$rol = $input['rol_show'];
	
	$query=DB::update("update  usuario set email='$email',nombre='$nombre',password='$password',id_rol=$rol where email=?",[$email]);


	return redirect()->action('UsuarioController@usuario_mostrar')->withInput();

    }
    
    public function Login(Request $input)
	{
    $email = $input['email_show'];
    $contrasenia = $input['contrasenia_show'];

    $query = "select * from usuario where email='$email'";
    $data=DB::select($query);
    print_r($data);

    die();
    }
    
    public function Registrar(Request $input)
	{
	$nombre = $input['nombre_show'];
	$email = $input['email_show'];
	$password = $input['contrasenia_show'];
	$rol = 2;
    
   
    
	$query=DB::insert('insert into usuario (email,nombre,password,id_rol) values (?, ?, ?, ?)', [$email, $nombre,$password,$rol]);
    echo "se registro el usuario";

	}
}
