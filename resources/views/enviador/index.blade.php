@extends('layouts.admin')
@section('contenido')
<div class=row>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3> Listado de Enviadores <a href="enviador/create"><button class="btn btn-sucess">Nuevo</button></a></h3>
		@include('enviador.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Direccion</th>
					<th>Fecha Nacimiento</th>

					<th>Imagen</th>

					<th>Correo</th>
					<th>Contraseña</th>
					<th>Opciones</th>
				</thead>

				
					@foreach($enviadores as $env)
					<tr>
						<td>{{ $env->idEnviador}}</td>
						<td>{{ $env->nombre}}</td>
						<td>{{ $env->direccion}}</td>
						<td>{{ $env->fechaNacimiento}}</td>

						<td>
							<img src="{{asset('imagenes/enviador/'.$env->imgEnv)}}" alt="$env->imgEnv" height="100px" width="100px" class="img-thumbnail">

						</td>

						<td>{{ $env->correo}}</td>
						<td>{{ $env->contrasena}}</td>
						<td>
							<a href="{{URL::action('EnviadorController@edit',$env->idEnviador)}}"><button class="btn btn-info">Editar</button></a>
							<a href=""><button class="btn btn-info">Eliminar</button></a>
						</td>
						
					</tr>
					
					@endforeach
				
			</table>
			

		</div>
		{{$enviadores->render()}}
		
	</div>
</div>

@endsection