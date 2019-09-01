@extends('welcome2')
@section('contenido')
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
   <title>Lista de Categorias</title>

</head>

<body>

<div class="container" justify-content-center align-items-center">
   <br><br>
   <button type="button" class="btn btn-success" data-toggle="modal" data-target="#insertModal">Agregar</button>

   <div class="table-responsive" >
       <table  id="table_id"class="table table-condensed table-striped table-bordered" style="width:auto">
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
                   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="<?php echo $usuario->email;?>"  data-categoria="<?php echo $usuario->nombre;?>">Eliminar</button>
                   </td>

               </tr>
           @endforeach
           </tbody>
       </table>
       </div>
</div>



<!--model eliminar -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Eliminar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      {{ Form::open(array('action' => 'UsuarioController@eliminar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">¿Seguro que desea eliminar el registro?</label>
          </div>
          <div class="modal-footer">
          {{ Form::hidden('id_show') }}
        {!! Form::submit( 'Si', ['class' => 'btn btn-danger', 'name' => 'submitbutton', 'value' => 'login'])!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>


<!-- model insertar-->
<div class="modal fade" id="insertModal" tabindex="-1" role="dialog"  aria-labelledby="insertModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="insertModalLabel">Insertar Nuevo Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <?php
           $query = "select * from rol ";

           $data=DB::select($query);
           
           
            
        ?>

{{ Form::open(array('action' => 'UsuarioController@insertar', 'method' => 'post','id'=>'student-settings','name'=>'loginform')) }}
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            {{ Form::email('email_show', '', array('id' => 'email_show',  'placeholder' => 'Email')) }}
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            {{ Form::text('nombre_show', '', array('id' => 'nombre_show',  'placeholder' => 'Nombre')) }}
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Contraseña:</label>
            {{ Form::password('contrasenia_show', array('id' => 'contrasenia_show', 'placeholder' => 'Contraseña')) }}
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Rol:</label>
            <select class="form-control" name="rol_show">
            <option value="" disabled selected>Elige un Rol</option>
            @foreach ($data as $item)
            <?echo $item->id_categoria; ?>
            <option value="{{ $item->id_rol }}" > {{ $item->descripcion }} </option>
            @endforeach    </select>
          </div>
          

          <div class="modal-footer">
        {!! Form::submit( 'Insertar', ['class' => 'btn btn-primary', 'name' => 'submitbutton', 'value' => 'login'])!!}
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        {{ Form::close() }}
      </div>
    </div>
  </div>
</div>





<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript">

$('#deleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var id = button.data('id')
  var categoria=button.data('categoria')
  var modal = $(this)
  modal.find('.col-form-label').text('¿Esta seguro que desea eliminar el registro: ' +categoria+'?')
  document.forms[0].id_show.value=id
});

$(document).ready(function() {
  var oTable = $('#table_id').dataTable( {
    "scrollX": true,
    "autoWidth": false,
    "language": {
                "emptyTable":            "No hay datos disponibles en la tabla.",
                "info":                       "_START_ - _END_ de _TOTAL_ ",
                "infoEmpty":            "Vacío",
                "infoFiltered":            "",
                "infoPostFix":            "(Resultados)",
                "lengthMenu":            "Mostrar _MENU_ registros",
                "loadingRecords":        "Cargando...",
                "processing":            "Procesando...",
                "search":                "Buscar:",
                "searchPlaceholder":    "Dato para buscar",
                "zeroRecords":            "No se han encontrado coincidencias.",
                "paginate": {
                    "first":            "Primera",
                    "last":                "Última",
                    "next":                "Siguiente",
                    "previous":            "Anterior"
                },
                "aria": {
                    "sortAscending":    "Ordenación ascendente",
                    "sortDescending":    "Ordenación descendente"
                }
            },
            "lengthMenu":        [[5, 10, 20, 25, 50, -1], [5, 10, 20, 25, 50, "Todos"]],
            "iDisplayLength":    5,
            "bJQueryUI":        false,
            "columns" : [
                {"data": 0},
                {"data": 1},
                {"data": 2},
                {"data": 3},
             
                {"data": 4,'orderable': false, 'searchable': false}
            ],

            "dom": "<'row'<'col-sm-7 col-md-4'l><'col-sm-6 col-md-3'f>>" +
                   "<'row'<'col-sm-12'tr>>" +
                   "<'row'<'col-sm-7 col-md-4'i><'col-sm-6 col-md-3'p>>",
  });
        $('label').addClass('form-inline');
        $('select, input[type="search"]').addClass('form-control input-sm');
   
  /*$(window).bind('resize', function () {
    table.columns.adjust().draw();
  } );*/
} );

</script>

</body>
</html>


@stop
