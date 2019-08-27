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
     
       <table  class="table table-condensed table-striped table-bordered" >
           <thead>
           <tr>
               <th>Categoria</th>
              
           </tr>
           </thead>
           <tbody>
           @foreach($categorias as $categoria)
               <tr>
                  
                   <td>{{ $categoria->descripcion }}</td>
                  
                   <td>
                    
                   <a class="btn btn-danger btn-xs" href="{{ route('Admin_categoria_borrar',['id' => $categoria->id_categoria])}}" >Eliminar</a>

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


