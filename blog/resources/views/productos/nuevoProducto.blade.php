<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Agregar Nuevo Producto</h1>
	<form method="post" action="/productos">
		@csrf
		Nombre:<input type="text" name="nombre"><br>
		Marca:<input type="text" name="marca"><br>
		Descripción: <textarea name="descripcion"></textarea><br>
		Costo:<input type="text" name="costo"><br>
		<input type="submit" name="Guardar">
	</form>
</body>
</html>