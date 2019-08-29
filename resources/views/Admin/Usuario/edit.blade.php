@extends('welcome2')
@section('contenido')
<?php
$valor= $_GET['email'];


$query = "SELECT rol.id_rol,usuario.email,usuario.nombre,usuario.password,rol.descripcion FROM usuario inner join rol on usuario.id_rol=rol.id_rol where usuario.email='$valor'";

    $data=DB::select($query);
   
    foreach($data as $item)
    {
        $id=$item->email;
        $nombre=$item->nombre;
        $password=$item->password;
        $rol=$item->descripcion;
        $id_rol=$item->id_rol;
        
        //$categoria=$item->cate;
        //$id_cate=$item->id_categoria;
    }

    $query2="select * from rol";
    $data2=DB::select($query2);
    
?>
{{ Form::open(array('action' => 'UsuarioController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
                        <label>
							Email
                            {{ Form::email('id_show', $id) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>

                        <br/>
						<label>
							Nombre
                            {{ Form::text('nombre_show', $nombre) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Contrasenia
                            {{ Form::text('contrasenia_show', $password) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Rol
                            <select class="form-control" name="rol_show">

  <option value="{{ $id_rol }}" > {{ $rol }} </option>

  @foreach ($data2 as $item)
    <option value="{{ $item->id_rol }}" > {{ $item->descripcion }} </option>
  @endforeach    </select>
						</label>
                        <br/>
                        

						{!! Form::submit( 'actualizar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_cursos " >Cancelar</a>
                         


@stop