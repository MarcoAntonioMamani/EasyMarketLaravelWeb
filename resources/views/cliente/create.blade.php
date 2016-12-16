@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Nuevo Cliente</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        {!!Form::open(array('url'=>'cliente','method'=>'POST','autocomplete'=>'off', 'files'=>'true'))!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre...">
        </div>
        <div class="form-group">
            <label for="nombre">Correo</label>
            <input type="text" name="correo" class="form-control" placeholder="Correo...">
        </div>
        <div class="form-group">
            <label for="nombre">Direccion</label>
            <input type="text" name="direccion" class="form-control" placeholder="Direccion...">
        </div><div class="form-group">
            <label for="nombre">Telefono</label>
            <input type="text" name="telefono" class="form-control" placeholder="Telefono...">
        </div>
        <div class="form-group">
                <label for="imgCli">Imagen</label>
                <input type="file" name="imgCli" class="form-control">
            </div>
        
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-check"></i>Guardar</button>
            <button class="btn btn-danger" type="reset"><i class="fa fa-btn fa-reply"></i>Cancelar</button>
        </div>

        {!!Form::close()!!}		

    </div>
</div>

@endsection