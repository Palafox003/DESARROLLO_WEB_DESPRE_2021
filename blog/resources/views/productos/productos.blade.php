@extends('layouts.app')

@section('titulo','PRODUCTOS')

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col">
			<h1>Lista de Productos</h1>
			<form method="post" action="/productos/buscar">
				@csrf
			  <div class="mb-3">
			    <label for="buscar" class="form-label">Buscar:</label>
			    <input type="text" name="buscar" class="form-control" id="buscar" aria-describedby="emailHelp"> 
			  </div>
			  <button type="submit" class="btn btn-primary">Buscar</button><br><br>
			</form>
			<table class="table">
				<thead class="table-dark">
					<tr>
						<th>#</th>
						<th>Marca</th>
						<th>Producto</th>
						<th>Descripción</th>
						<th>Costo</th>
						<th>Editar</th>
						<th>Eliminar</th>
						<th>Imagen</th>
					</tr>
				</thead>
				<tbody>
		@foreach($productos as $producto)
					<tr>
						<td>{{$loop->index +1}}</td>
						<td>
							<img width="50" class="img-fluid" src="{{asset('/img/'.$producto->marca->logo)}}">
						</td>
						<td>{{$producto->nombre}}</td>
						<td>{{$producto->descripcion}}</td>
						<td>${{number_format($producto->costo,2)}}</td>
						<td><a class="btn btn-primary" href="/productos/{{$producto->id}}/edit" role="button">Editar</a></td>
						<td>
							<form method="post" action="/productos/{{$producto->id}}">
								@csrf
								@method('delete')
								<input type="hidden" name="producto_id" value="{{$producto->id}}">
								<input class="btn btn-danger" type="submit" name="eliminar" value="Eliminar">
							</form>
						</td>
						<td>
							<a target="_blank" class="btn btn-primary" href="{{asset('/img/'.$producto->img)}}" role="button">Ver</a></td>
						</td>
					</tr>
		@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</div>
@endsection