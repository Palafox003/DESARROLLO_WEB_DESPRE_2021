<!DOCTYPE html>
<html>
<head>
	<title>Lista de Productos</title>
</head>
<body>
	<h1>Lista de Productos</h1>
	<table border="1">
		<tr>
			<th>#</th>
			<th>Producto</th>
			<th>Marca</th>
			<th>Descripción</th>
			<th>Costo</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</tr>
@foreach($productos as $producto)
		<tr>
			<td>{{$loop->index +1}}</td>
			<td>{{$producto->nombre}}</td>
			<td>{{$producto->marca}}</td>
			<td>{{$producto->descripcion}}</td>
			<td>{{$producto->costo}}</td>
			<td><a href="/productos/{{$producto->id}}/edit">Editar</a></td>
			<td>
				<form method="post" action="/productos/{{$producto->id}}">
					@csrf
					@method('delete')
					<input type="hidden" name="producto_id" value="{{$producto->id}}">
					<input type="submit" name="eliminar" value="Eliminar">
				</form>
			</td>
		</tr>
@endforeach
	</table>
</body>
</html>