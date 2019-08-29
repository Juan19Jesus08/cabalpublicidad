@extends('welcome2')
@section('contenido')
<?php
$valor= $_GET['id_curso'];


$query = "select cursos.nombre,cursos.descripcion,cursos.precio,cursos.fecha_creacion,cursos.id_curso,categoria.descripcion as cate,categoria.id_categoria from cursos inner join categoria on cursos.id_categoria=categoria.id_categoria where id_curso='$valor'";

    $data=DB::select($query);
    
    foreach($data as $item)
    {
        $nombre=$item->nombre;
        $descripcion=$item->descripcion;
        $precio=$item->precio;
        $fecha=$item->fecha_creacion;
        $id=$item->id_curso;
        $categoria=$item->cate;
        $id_cate=$item->id_categoria;

    }

    $query2="select * from categoria";
    $data2=DB::select($query2);
    
?>
{{ Form::open(array('action' => 'CursosController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
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
							Descripcion
                            {{ Form::text('descripcion_show', $descripcion) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Precio
                            {{ Form::text('precio_show', $precio) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>
                        <br/>
                        <label>
							Categoria
                            <select class="form-control" name="categoria_show">

  <option value="{{ $id_cate }}" > {{ $categoria }} </option>

  @foreach ($data2 as $item)
    <option value="{{ $item->id_categoria }}" > {{ $item->descripcion }} </option>
  @endforeach    </select>
						</label>
                        <br/>
                        <label>
							Nombre
                            {{ Form::date('fecha_show', $fecha) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						{!! Form::submit( 'actualizar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_cursos " >Cancelar</a>
                         


@stop