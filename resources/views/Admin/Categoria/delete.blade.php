@extends('welcome2')
@section('contenido')
<?php

$valor= $_GET['id_categoria'];
echo $valor;
DB::delete("DELETE FROM categoria WHERE id_categoria='$valor'");

?>


@stop