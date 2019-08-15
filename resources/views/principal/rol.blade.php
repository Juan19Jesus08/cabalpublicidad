<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php print_r($data);?>
		<table border="1">
		<thead>
		<tr>
			<th>id_rol</th>
			<th>rol</th>
		</tr>
		</thead>
		<tbody>
			@foreach($data as $items)
			<tr>
				<td>{{$items->id_rol}}</td>
				<td>{{$items->descripcion}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>