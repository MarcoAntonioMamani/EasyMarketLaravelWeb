@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="table-responsive">
            <h3>Editar Producto: {{$producto->descripcion}}</h3>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {!! Form::model($producto,['method'=>'PATCH','files'=>'true' ,'route'=>['almacen.producto.update',$producto->idPro]])!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <select name="idCat" id="idCat" class="form-control">
                    @foreach($categorias as $categoria)
                    @if($categoria->idCat == $producto->idCat)
                    <option value="{{$categoria->idCat}}" selected>{{$categoria->nombre}}</option>
                    @else
                    <option value="{{$categoria->idCat}}">{{$categoria->nombre}}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" value="{{$producto->cantidad}}" placeholder="Cantidad..">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}" placeholder="Nombre..">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" value="{{$producto->precio}}" placeholder="Precio..">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imgPro" class="form-control">
                @if(($producto->imgPro)!="")
                <img src="{{asset('imagenes/productos/'.$producto->imgPro)}}" height="250px" width="250px">
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit"><i class="fa fa-btn fa-refresh"></i>Guardar</button>
                <button class="btn btn-warning" type="reset"><i class="fa fa-btn fa-reply"></i>Cancelar</button>
            </div>


            {!!Form::close()!!}

        </div>
    </div>
</div>
@endsection