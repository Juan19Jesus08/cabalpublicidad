<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use DB;
use Closure;


class Cliente
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$rol)
    {
        
     
        $correo=Session::get('email');
        $pass=Session::get('contrasenia');
        
        
        $query = "select * from usuario where email='$correo' and password='$pass'";
        $data=DB::select($query);
       
        $cantidad= sizeof($data);
        if($cantidad>0)
        {
            foreach($data as $item)
            {
                $id= $item->id_rol;

            }
            if($id==2)
            {
                return $next($request);
            }
            else{
                return redirect('/Admin_categoria');     
            }
            
        }
        else
        {
            
            return redirect('/iniciar_sesion');
        }
    
   
        
    }
}
