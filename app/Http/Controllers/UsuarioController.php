<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
class UsuarioController extends Controller
{
	

    public function usuario_mostrar()
	{
		$usuarios=DB::select('SELECT usuario.email,usuario.nombre,usuario.password,rol.descripcion,rol.id_rol FROM usuario inner join rol on usuario.id_rol=rol.id_rol order by rol.id_rol asc ');
		return view('/Admin/Usuario/index',compact('usuarios'));
    }

	public function usuario_eliminar()
		{
			return view('/Admin/Usuario/delete');
		}

	public function eliminar(Request $input)
    {
		
		$id=$input['id_show'];
	
	
	
		$query=DB::delete("DELETE FROM usuario WHERE email='$id'");
	
	
		return redirect()->action('UsuarioController@usuario_mostrar')->withInput();
	
	}
	
	public function usuario_nuevo()
		{
			return view('/Admin/Usuario/insert');
		}


	public function insertar(Request $input)
	{
	$nombre = $input['nombre_show'];
	$email = $input['email_show'];
	$password = $input['contrasenia_show'];
	$encryptedPassword = bcrypt($password);
	$rol=$input['rol_show'];
    
	$query=DB::insert('insert into usuario (email,nombre,password,id_rol) values (?, ?, ?, ?)', [$email, $nombre,$encryptedPassword,$rol]);
    return redirect()->action('UsuarioController@usuario_mostrar')->withInput();

	}

	public function usuario_editar()
		{
			return view('/Admin/Usuario/edit');
		}

	public function actualizar(Request $input)
	{
		$email = $input['email_show'];
        $nombre = $input['nombre_show'];
        $password = $input['contrasenia_show'];
		$rol = $input['rol_show'];

	
		$query=DB::select("SELECT usuario.password FROM usuario WHERE email='$email'");

		
		if($query[0]->password==$password)
		{
			$query2=DB::update("update  usuario set email='$email',nombre='$nombre',id_rol=$rol where email=?",[$email]);
			return redirect()->action('UsuarioController@usuario_mostrar')->withInput();
		}
		else{
			$encryptedPassword = bcrypt($password);
			$query2=DB::update("update  usuario set email='$email',nombre='$nombre',password='$encryptedPassword',id_rol=$rol where email=?",[$email]);
			return redirect()->action('UsuarioController@usuario_mostrar')->withInput();
		}
	

	
	


	

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
	$encryptedPassword = bcrypt($password);
	$rol = 2;
    
   
    
	$query=DB::insert('insert into usuario (email,nombre,password,id_rol) values (?, ?, ?, ?)', [$email, $nombre,$encryptedPassword,$rol]);
    echo "se registro el usuario";

	}

	public function Logout()
	{
		
		Session::flush();
		return redirect('/');
	}
	

	 function Actualizar_nombre(Request $input){
		$nombre = $input['nombre_show'];
		$email = $input['email_show'];

		$query2=DB::update("update  usuario set nombre='$nombre' where email=?",[$email]);
		return redirect('/perfil');
	 }

	 function Actualizar_contraseña(Request $input){
	
		$email = $input['email_show'];
		$contraseña = $input['contrasenia_show'];
		$contraseña_nueva=$input['new_show'];
		$confirmar_contraseña=$input['confirm_show'];
		$message = '';

		echo $email."   ".$contraseña."   ".$contraseña_nueva."   ".$confirmar_contraseña;
		$query2 = "select usuario.password,usuario.email from usuario where email='$email'";
		$data2=DB::select($query2);

		
		if (Hash::check($contraseña, $data2[0]->password)) {
			echo 'es igual al usuario';
			if($contraseña_nueva==$confirmar_contraseña)
			{
				$encryptedPassword = bcrypt($confirmar_contraseña);
			$query2=DB::update("update  usuario set password='$encryptedPassword' where email=?",[$email]);
			return redirect('/perfil');
			}
			else{
				$message= ' no es igual al a la de confirmar';
				return redirect('/mi_password');
			}
		}
		else{
			$message ='no es igual';
			return redirect('/mi_password');
		}
	}
}
