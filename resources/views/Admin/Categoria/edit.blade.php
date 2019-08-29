@extends('welcome2')
@section('contenido')
<?php
$valor= $_GET['id_categoria'];


$query = "select * from categoria where id_categoria='$valor'";

    $data=DB::select($query);
    
    foreach($data as $item)
    {
        $cate=$item->descripcion;
        $id=$item->id_categoria;
    }
    
    
    
?>
{{ Form::open(array('action' => 'CategoriaController@actualizar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
                        <label>
							
                            {{ Form::hidden('id_show', $id) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						<label>
							Categoria
                            {{ Form::text('categoria_show', $cate) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						{!! Form::submit( 'actualizar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_categoria " >Cancelar</a>
                         


@stop