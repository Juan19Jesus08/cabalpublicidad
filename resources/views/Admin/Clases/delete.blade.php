@extends('welcome2')
@section('contenido')
<?php
$valor= $_GET['id_clase'];


$query = "select * from clases where id_clase='$valor'";

    $data=DB::select($query);
    
    foreach($data as $item)
    {
        $cate=$item->nombre;
        $id=$item->id_clase;
    }
    
    
    
?>
{{ Form::open(array('action' => 'ClasesController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
                        <label>
							
                            {{ Form::hidden('id_show', $id) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						<label>
							Se eliminara el curso : <?php echo $cate?>
                            {{ Form::hidden('categoria_show', $cate) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						{!! Form::submit( 'Aceptar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_clases " >Cancelar</a>
                        
                    
                         


@stop