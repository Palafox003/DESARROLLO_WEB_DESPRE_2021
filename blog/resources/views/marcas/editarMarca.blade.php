@extends('layouts.app')

@section('titulo','NUEVA MARCA')

@section('contenido')
	<div class="container">
		<div class="row">
			<div class="col">
				<form method="post" action="/marcas/{{$marca->id}}" enctype="multipart/form-data">
					@csrf
					@method('put')
				  <div class="row mb-3">
				    <label for="marca" class="col-sm-2 col-form-label">Nombre de la Marca</label>
				    <div class="col-sm-10">
				      <input type="text" name="nombre" class="form-control" value="{{$marca->nombre}}" id="marca">
				    </div>
				  </div>

				  	<div class="mb-3">
					  <label for="formFile" class="form-label">Logo de la marca</label>
					  <input class="form-control" type="file" id="formFile" name="logo">
					</div>

					<div>
						<img class="img-fluid" src="{{asset('/img/'.$marca->logo)}}">
					</div>
				 
				  
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
			</div>
		</div>
	</div>
@endsection