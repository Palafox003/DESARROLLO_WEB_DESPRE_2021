<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Editar Producto</h1>
	<form method="post" action="/productos/{{$producto->id}}">
		@csrf
		@method('put')
		Nombre:<input type="text" value="{{$producto->nombre}}" name="nombre"><br>
		Marca:<input type="text" value="{{$producto->marca}}" name="marca"><br>
		Descripción: <textarea name="descripcion">{{$producto->descripcion}}</textarea><br>
		Costo:<input type="text" value="{{$producto->costo}}" name="costo"><br>
		<input type="submit" name="Actualizar">
	</form>
</body>
</html>