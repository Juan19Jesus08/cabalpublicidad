@extends('welcome2')
@section('contenido')
<?php
$query = "select * from rol ";

$data=DB::select($query);



?>
{{ Form::open(array('action' => 'UsuarioController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
					
                        <label>
							Email 
                            {{ Form::email('email_show', '', array('id' => 'email_show',  'placeholder' => 'Email')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Nombre
                            {{ Form::text('nombre_show', '', array('id' => 'nombre_show',  'placeholder' => 'Nombre')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Contraseña
                            {{ Form::password('contrasenia_show', array('id' => 'contrasenia_show', 'placeholder' => 'Contraseña')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Rol
                            <select class="form-control" name="rol_show">

  <option>Elige un rol</option>

  @foreach ($data as $item)
    <option value="{{ $item->id_rol }}" > {{ $item->descripcion }} </option>
  @endforeach    </select>
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                       

						{!! Form::submit( 'insertar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_Usuario " >Cancelar</a>

@stop