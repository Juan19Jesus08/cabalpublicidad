<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Session;
class Admin
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
        $email= $request->email_show;
        $password= $request->contrasenia_show;
        $query = "select * from usuario where email='$email' and password='$password'";
        $data=DB::select($query);
       
        $cantidad= sizeof($data);
        if($cantidad>0)
        {
            foreach($data as $item)
            {
                $id= $item->id_rol;

            }
            if($id==1)
            {
                return $next($request);
            }
            else{
                return redirect('/mis_cursos');     
            }
            
        }
        else
        {
            
            return redirect('/iniciar_sesion');
        }
    
   
        
    }
}
