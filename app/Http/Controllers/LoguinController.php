<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;

class LoguinController extends Controller
{
    public function Login(Request $input)

	{
    $email = $input['email_show'];
    $contrasenia = $input['contrasenia_show'];

    $query = "select * from usuario where email='$email' and password='$contrasenia'";
        $data=DB::select($query);
       
        $cantidad= sizeof($data);
        if($cantidad>0)
        {
            //echo 'essta registrado';
            Session::put('email',$email);
            Session::put('contrasenia',$contrasenia);
            $correo=Session::get('email');
            $pass=Session::get('contrasenia');
            echo '<br/>';
            echo $correo."          ".$pass;
            return redirect('/Admin_categoria');

        }
        else{
            return redirect('/iniciar_sesion');
        }

    die();
    }
}
