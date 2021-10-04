@extends('layouts.app')
@section('titulo','NUEVO PRODUCTO')
@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>Agregar Nuevo Producto</h1>

				<form method="post" action="/productos" enctype="multipart/form-data">
					@csrf
				  <div class="mb-3">
				    <label for="nombre" class="form-label">Nombre:</label>
				    <input name="nombre" type="text" class="form-control" id="nombre" aria-describedby="nombre">
				  </div>

				  <div class="mb-3">
				   <div class="form-floating">
					  <textarea name="descripcion" class="form-control" placeholder="Leave a comment here" id="descripcion"></textarea>
					  <label for="descripcion">Descripción</label>
					</div>
				  </div>

				  <div class="mb-3">
				    <label for="costo" class="form-label">Costo:</label>
				    <input type="text" name="costo" class="form-control" id="costo" aria-describedby="costo">
				  </div>

					<div class="mb-3">
					    <label for="costo" class="form-label">Marca:</label>
					  <select class="form-select" name="marca" aria-label="Default select example">
						  <option selected>Selecciona la marca</option>
				@foreach($marcas as $marca)
						  <option value="{{$marca->id}}">{{$marca->nombre}}</option>
				@endforeach		 
						</select>
					</div>
					<div class="mb-3">
					  <label for="formFile" class="form-label">Imagen del Producto</label>
					  <input class="form-control" name="img" type="file" id="formFile">
					</div>

				  
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>	
	</div>
@endsection