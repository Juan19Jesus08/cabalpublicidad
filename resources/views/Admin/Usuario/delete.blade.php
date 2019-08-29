@extends('welcome2')
@section('contenido')
<?php
$valor= $_GET['email'];


$query = "select * from usuario where email='$valor'";

    $data=DB::select($query);

    
    foreach($data as $item)
    {
        $cate=$item->nombre;
        $id=$item->email;
    }
    
    
    
?>
{{ Form::open(array('action' => 'UsuarioController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
										<!--<form name="loginform" id="student-settings" class="student-settings" method="post">-->
						
                        <label>
							
                            {{ Form::hidden('email_show', $id) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						<label>
							Se eliminara el usuario : <?php echo $cate?>
                            {{ Form::hidden('nombre_show', $cate) }}
							<!--<input type="text" name="log" value=""/>-->
						</label>


						{!! Form::submit( 'Aceptar', ['class' => 'btn btn-info btn-block', 'name' => 'submitbutton', 'value' => 'login'])!!}
						 {{ Form::close() }}
                         <a class="btn btn-info btn-block" href="/Admin_clases " >Cancelar</a>
                        
                    
                         


@stop