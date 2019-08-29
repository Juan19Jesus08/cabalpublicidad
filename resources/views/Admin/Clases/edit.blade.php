@extends('welcome2')
@section('contenido')
<?php
$valor= $_GET['id_clase'];


$query = "SELECT cursos.id_curso,clases.id_clase,clases.nombre,clases.url,clases.descripcion,clases.duracion,cursos.nombre as curso FROM clases inner join cursos on cursos.id_curso=clases.id_curso where clases.id_clase='$valor'";

    $data=DB::select($query);
   
    foreach($data as $item)
    {
        $id=$item->id_clase;
        $nombre=$item->nombre;
        $url=$item->url;
        $descripcion=$item->descripcion;
        $duracion=$item->duracion;
        $curso=$item->curso;
        $id_curso=$item->id_curso;
        
        //$categoria=$item->cate;
        //$id_cate=$item->id_categoria;
    }

    $query2="select * from cursos";
    $data2=DB::select($query2);
    
?>
{{ Form::open(array('action' => 'ClasesController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
                        <label>
							
                            {{ Form::hidden('id_show', $id) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						<label>
							Nombre
                            {{ Form::text('nombre_show', $nombre) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							URL
                            {{ Form::text('url_show', $url) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Descripcion
                            {{ Form::text('descripcion_show', $descripcion) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							
                            {{ Form::hidden('duracion_show', $duracion) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Curso
                            <select class="form-control" name="curso_show">

  <option value="{{ $id_curso }}" > {{ $curso }} </option>

  @foreach ($data2 as $item)
    <option value="{{ $item->id_curso }}" > {{ $item->nombre }} </option>
  @endforeach    </select>
						</label>
                        <br/>
                        

						{!! Form::submit( 'actualizar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_cursos " >Cancelar</a>
                         


@stop