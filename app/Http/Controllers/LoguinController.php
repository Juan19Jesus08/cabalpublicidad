<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use DB;

class LoguinController extends Controller
{
    public function Login(Request $input)

	{
    $email = $input['email_show'];
    $contrasenia = $input['contrasenia_show'];
   
    
    $query = "select * from usuario where email='$email'";
        $data=DB::select($query);
        $cantidad= sizeof($data);

        if($cantidad>0)
        {
            $query2 = "select usuario.password,usuario.email from usuario where email='$email'";
            $data2=DB::select($query2);

            
            if (Hash::check($contrasenia, $data2[0]->password)) {

           //echo 'essta registrado';
            Session::put('email',$email);
            Session::put('contrasenia',$contrasenia);
            $correo=Session::get('email');
            $pass=Session::get('contrasenia');
            //echo '<br/>';
            //echo $correo."          ".$pass;
            return redirect('/Admin_categoria');



            }else{
                return redirect('/iniciar_sesion');
            }

           

        }
        else{
            return redirect('/iniciar_sesion');
        }

    
    }
}
