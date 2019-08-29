@extends('welcome2')
@section('contenido')
<?php
$query = "select * from cursos ";

$data=DB::select($query);
print_r($data);


?>
{{ Form::open(array('action' => 'ClasesController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
						<label>
							Nombre
                            {{ Form::text('nombre_show', '', array('id' => 'nombre_show',  'placeholder' => 'Nombre')) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Url 
                            {{ Form::text('url_show', '', array('id' => 'url_show',  'placeholder' => 'URL')) }}
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
							Cursos
                            <select class="form-control" name="curso_show">

  <option>Elige un curso</option>

  @foreach ($data as $item)
    <option value="{{ $item->id_curso }}" > {{ $item->nombre }} </option>
  @endforeach    </select>
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                       

						{!! Form::submit( 'insertar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_clases " >Cancelar</a>

@stop