@extends('welcome2')
@section('contenido')
<?php
$query = "select * from categoria ";

$data=DB::select($query);



?>
{{ Form::open(array('action' => 'CursosController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
						<label>
							Nombre
                            {{ Form::text('nombre_show', '', array('id' => 'nombre_show',  'placeholder' => 'Nombre')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Descripcion 
                            {{ Form::text('descripcion_show', '', array('id' => 'descripcion_show',  'placeholder' => 'Descripcion')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Precio
                            {{ Form::text('precio_show', '', array('id' => 'precio_show',  'placeholder' => 'Precio')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Categoria
                            <select class="form-control" name="categoria_show">

  <option>Elige una categoria</option>

  @foreach ($data as $item)
    <option value="{{ $item->id_categoria }}" > {{ $item->descripcion }} </option>
  @endforeach    </select>
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Fecha de Creacion
                            {{ Form::date('fecha_show', '', array('id' => 'fecha_show',  'placeholder' => 'Fecha de creacion')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>

						{!! Form::submit( 'insertar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_cursos " >Cancelar</a>

@stop