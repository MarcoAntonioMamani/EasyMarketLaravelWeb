@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Modificar Enviador: {{$enviador->nombre}}</h3>
		@if (count($errors)>0)
		<div clas="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
				<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
		@endif
	</div>
</div>


		{!!Form::model($enviador,['method'=>'PATCH','route'=>['enviador.update',$enviador->idEnviador],'files'=>'true'])!!}
		{{Form::token()}}



		<div class="row">
			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" required value="{{$enviador->nombre}}" class="form-control" >

				</div>
			</div>


			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" required value="{{$enviador->direccion}}"  class="form-control" >

				</div>				
			
			</div>


			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="fechaNacimiento">Fecha de nacimiento</label>
					<input type="text" name="fechaNacimiento" required value="{{$enviador->fechaNacimiento}}" class="form-control" >

				</div>				
			
			</div>


			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="text" name="correo" required value="{{$enviador->correo}}" class="form-control" >

				</div>
			</div>

			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="contrasena">Contraseña</label>
					<input type="text" name="contrasena" required value="{{$enviador->contrasena}}" class="form-control" >
				</div>
			</div>

			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="imgEnv">Foto</label>
					<input type="file" name="imgEnv" class="form-control" >
					@if(($enviador->imgEnv)!="")
						<img src="{{asset('imagenes/enviador/'.$enviador->imgEnv)}}" height="300px" width="300px">

					@endif
					

				</div>
			</div>

		</div>
		<div class="form-group">
			<button class="btn btn-success" type="submit">Guardar</button>
			<button class="btn btn-warning" type="reset">Cancelar</button>
		</div>
		{!!Form::close()!!}
		
@endsection