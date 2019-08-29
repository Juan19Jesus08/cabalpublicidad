@extends('welcome2')
@section('contenido')
{{ Form::open(array('action' => 'CategoriaController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
						<label>
							Categoria
                            {{ Form::text('categoria_show', '', array('id' => 'categoria_show',  'placeholder' => 'Categoria')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>

						{!! Form::submit( 'insertar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_categoria " >Cancelar</a>

@stop