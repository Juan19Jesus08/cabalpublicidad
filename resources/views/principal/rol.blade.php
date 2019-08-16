<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php print_r($videos_populares);
	echo"</br>";
	echo"</br>";
	echo"</br>";
	print_r($videos_recientes);
	?>
		<table border="1">
		<thead>
		<tr>
			<th>nombre</th>
			<th>descripcion</th>
            <th>calificacion</th>
            <th>vendidos</th>
            <th>precio</th>
		</tr>
		</thead>
		<tbody>
			@foreach($videos_populares as $items)
			<tr>
				<td>{{$items->nombre}}</td>
				<td>{{$items->descripcion}}</td>
                <td>{{$items->calificacion_curso}}</td>
                <td>{{$items->vendidos}}</td>
                <td>{{$items->precio}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>