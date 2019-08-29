@extends('welcome2')
@section('contenido')
<html>
<head>
   <title>Lista de Categorias</title>

</head>

<body>

<div class="container">
   <br><br><br><br><br><br>
   <div class="row">
   <a class="btn btn-danger btn-xs" href="/Admin_categoria_nuevo " >Ingresar con A</a> 
       <table  id="table_id"class="table table-condensed table-striped table-bordered" >
           <thead>
           <tr>
               <th>Categoria</th>
               <th>Acciones</th>
              
           </tr>
           </thead>
           <tbody>
           @foreach($categorias as $categoria)
               <tr>
                  
                   <td>{{ $categoria->descripcion }}</td>
                  
                   <td>
                    
                   
                   <a class="btn btn-danger btn-xs" href="/Admin_categoria_borrar?id_categoria=<?php echo $categoria->id_categoria; ?> " >Eliminar  con A</a>
                   <a class="btn btn-danger btn-xs" href="/Admin_categoria_editar?id_categoria=<?php echo $categoria->id_categoria; ?> " >Editar  con A</a>
                   <button class="btn btn-danger btn-xs" onclick=' window.location = "/Admin_categoria_borrar?id_categoria=<?php echo $categoria->id_categoria; ?> "'>Eliminar</button>
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

