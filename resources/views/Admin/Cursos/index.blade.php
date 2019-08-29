@extends('welcome2')
@section('contenido')
<html>
<head>
   <title>Lista de Cursos</title>

</head>

<body>

<div class="container">
   <br><br><br><br><br><br>
   <div class="row">
   <a class="btn btn-danger btn-xs" href="/Admin_cursos_nuevo " >Ingresar con A</a> 
       <table  id="table_id"class="table table-condensed table-striped table-bordered" >
           <thead>
           <tr>
               <th>Nombre</th>
               <th>Descripcion</th>
               <th>Precio</th>
               <th>Categoria</th>
               <th>Fecha de Creacion</th>
               <th>Acciones</th>
              
           </tr>
           </thead>
           <tbody>
           @foreach($cursos as $curso)
               <tr>
                  
                   <td>{{ $curso->nombre}}</td>
                   <td>{{ $curso->descripcion}}</td>
                   <td>{{ $curso->precio}}</td>
                   <td>{{ $curso->cate}}</td>
                   <td>{{ $curso->fecha_creacion}}</td>
                  
                   <td>
                    
                   
                   <a class="btn btn-danger btn-xs" href="/Admin_cursos_borrar?id_curso=<?php echo $curso->id_curso; ?> " >Eliminar  con A</a>
                   <a class="btn btn-danger btn-xs" href="/Admin_cursos_editar?id_curso=<?php echo $curso->id_curso; ?> " >Editar  con A</a>
                  
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

