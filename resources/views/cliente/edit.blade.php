@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <h3>Editar Cliente: {{ $cliente->nombre}}</h3>
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach         
            </ul>
        </div>
        @endif

        {!!Form::model($cliente,['method'=>'PATCH', 'files'=>'true','route'=>['cliente.update',$cliente->idCliente]])!!}
        {{Form::token()}}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{$cliente->nombre}}" placeholder="Nombre...">
        </div>
        <div class="form-group">
            <label for="nombre">Correo</label>
            <input type="text" name="correo" class="form-control" value="{{$cliente->correo}}" placeholder="Nombre...">
        </div>    
        <div class="form-group">
            <label for="nombre">Direccion</label>
            <input type="text" name="direccion" class="form-control" value="{{$cliente->direccion}}" placeholder="Nombre...">
        </div>   
        <div class="form-group">
            <label for="nombre">Telefono</label>
            <input type="text" name="telefono" class="form-control" value="{{$cliente->telefono}}" placeholder="Nombre...">
        </div> 
        <div class="form-group">
            <label for="imagen">Imagen</label>
            <input type="file" name="imgCli" class="form-control">
            @if(($cliente->imgCli)!="")
            <img src="{{asset('imagenes/clientes/'.$cliente->imgCli)}}" height="250px" width="250px">
            @endif
        </div>

        <div class="form-group">
            <button class="btn btn-success" type="submit"><i class="fa fa-btn fa-refresh"></i>Guardar</button>
            <button class="btn btn-warning" type="reset"><i class="fa fa-btn fa-reply"></i>Cancelar</button>
        </div>

        {!!Form::close()!!}		

    </div>
</div>
@endsection