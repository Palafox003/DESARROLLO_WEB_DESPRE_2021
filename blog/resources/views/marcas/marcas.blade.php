@extends('layouts.app')

@section('titulo','MARCAS')

@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col">
				<h1>LISTA DE MARCAS</h1>
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th>#</th>
							<th>Logo</th>
							<th>Marca</th>
							<th></th>
						</tr>
					</thead>
				<tbody>
		@foreach($marcas as $marca)
					<tr>
						<td>{{$loop->index +1}}</td>
						<td><img width="100" class="img-fluid" src="{{asset('/img/'.$marca->logo)}}"></td>
						<td>{{$marca->nombre}}</td>
						<td>
							<!-- Example single danger button -->
							<div class="btn-group">
							  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
							    Opciones
							  </button>
							  <ul class="dropdown-menu">
							    <li><a class="dropdown-item" href="/marcas/{{$marca->id}}/edit">Editar</a></li>
							    <li><a class="dropdown-item" href="#">Eliminar</a></li>
							  </ul>
							</div>
						</td>			
					</tr>
		@endforeach
				</tbody>
			</table>
			</div>
		</div>
	</div>
@endsection