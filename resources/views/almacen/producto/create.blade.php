@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="table-responsive">
            <h3>Nuevo Producto</h3>

            @if(count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            {!!Form::open(array('url'=>'almacen/producto','method'=>'POST', 'autocomplete'=>'off', 'files'=>'true'))!!}
            {{Form::token()}}
            <div class="form-group">
                <label for="categoria">Seleccione una Categoria</label>
                <select name="idCat" id="idCat" class="form-control" >
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->idCat}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="text" name="cantidad" class="form-control" placeholder="Cantidad..">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="descripcion" class="form-control" placeholder="Nombre..">
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" class="form-control" placeholder="Precio..">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imgPro" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-check"></i>Guardar</button>
                <button class="btn btn-danger" type="reset"><i class="fa fa-btn fa-reply"></i>Cancelar</button>
            </div>

            {!!Form::close()!!}

        </div>
    </div>
</div>
@endsection