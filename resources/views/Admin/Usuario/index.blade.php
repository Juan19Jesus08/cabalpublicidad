@extends('welcome2')
@section('contenido')
<html>
<head>
   <title>Lista de Usuarios</title>

</head>

<body>

<div class="container">
   <br><br><br><br><br><br>
   <div class="row">
   <a class="btn btn-danger btn-xs" href="/Admin_usuario_nuevo " >Ingresar con A</a> 
       <table  id="table_id"class="table table-condensed table-striped table-bordered" >
           <thead>
           <tr>
               <th>Email</th>
               <th>Nombre</th>
               <th>Contraseña</th>
               <th>Rol</th>
               <th>Acciones</th>
              
           </tr>
           </thead>
           <tbody>
           @foreach($usuarios as $usuario)
               <tr>
                  
                   <td>{{ $usuario->email}}</td>
                   <td>{{ $usuario->nombre}}</td>
                   <td>{{ $usuario->password}}</td>
                   <td>{{ $usuario->descripcion}}</td>
                  
                  
                   <td>
                    
                   
                   <a class="btn btn-danger btn-xs" href="/Admin_usuario_borrar?email=<?php echo $usuario->email; ?> " >Eliminar  con A</a>
                   <a class="btn btn-danger btn-xs" href="/Admin_usuario_editar?email=<?php echo $usuario->email; ?> " >Editar  con A</a>
                  
                   </td>

               </tr>
           @endforeach
           </tbody>
       </table>
   </div>
</div>

</body>
</html>


@stop

<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>

