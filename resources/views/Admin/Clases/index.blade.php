@extends('welcome2')
@section('contenido')
<html>
<head>
   <title>Lista de Clases</title>

</head>

<body>

<div class="container">
   <br><br><br><br><br><br>
   <div class="row">
   <a class="btn btn-danger btn-xs" href="/Admin_clases_nuevo " >Ingresar con A</a> 
       <table  id="table_id"class="table table-condensed table-striped table-bordered" >
           <thead>
           <tr>
               <th>Nombre</th>
               <th>URL</th>
               <th>Descripcion</th>
               <th>Duracion</th>
               <th>Curso</th>
               <th>Acciones</th>
              
           </tr>
           </thead>
           <tbody>
           @foreach($clases as $clase)
               <tr>
                  
                   <td>{{ $clase->nombre}}</td>
                   <td>{{ $clase->url}}</td>
                   <td>{{ $clase->descripcion}}</td>
                   <td>{{ $clase->duracion}}</td>
                   <td>{{ $clase->curso}}</td>
                  
                   <td>
                    
                   
                   <a class="btn btn-danger btn-xs" href="/Admin_clases_borrar?id_clase=<?php echo $clase->id_clase; ?> " >Eliminar  con A</a>
                   <a class="btn btn-danger btn-xs" href="/Admin_clases_editar?id_clase=<?php echo $clase->id_clase; ?> " >Editar  con A</a>
                  
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

