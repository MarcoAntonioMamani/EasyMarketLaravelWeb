@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<h3>Nuevo Enviador</h3>
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



		{!!Form::open(array('url'=>'enviador','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
		{{Form::token()}}


		<div class="row">
			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">				
				<div class="form-group">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">

				</div>
			</div>


			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="direccion">Direccion</label>
					<input type="text" name="direccion" required value="{{old('direccion')}}"  class="form-control" placeholder="Direccion...">

				</div>				
			
			</div>


			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="fechaNacimiento">Fecha de nacimiento</label>
					<input type="text" name="fechaNacimiento" required value="{{old('fechaNacimiento')}}" class="form-control" placeholder="Fecha de nacimiento...">

				</div>				
			
			</div>


			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="correo">Correo</label>
					<input type="text" name="correo" required value="{{old('correo')}}" class="form-control" placeholder="Correo...">

				</div>
			</div>

			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="contrasena">Contraseña</label>
					<input type="text" name="contrasena" required value="{{old('contrasena')}}" class="form-control" placeholder="Contraseña...">
				</div>
			</div>

			<div class="col-lg-6 col.col-sm-6 col-md-6 col-xs-12">
				<div class="form-group">
					<label for="imgEnv">Foto</label>
					<input type="file" name="imgEnv" class="form-control" >

				</div>
			</div>

		</div>







		<div class="form-group">
			<button class="btn btn-primary" type="submit">Guardar</button>
			<button class="btn btn-primary-danger" type="reset">Cancelar</button>

		
		</div>


		{!!Form::close()!!}
		


@endsection