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
        
        
        
        $query = "select * from usuario where email='$correo' ";
        $data=DB::select($query);
       
        
            if($data[0]->id_rol==2)
            {
                return $next($request);
            }
            else{
                return redirect('/Admin_categoria');     
            }
      
   
        
    }
}
