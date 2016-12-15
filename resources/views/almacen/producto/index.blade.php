@extends ('layouts.admin')
@section ('contenido')

<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Productos <a href="producto/create">
                <button class="btn btn-soundcloud">
                    <i class="fa fa-btn fa-plus"></i>Nuevo</button></a></h3>
        @include('almacen.producto.search')
    </div>
</div>

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th class="text-center">Id</th>
                <th class="text-center">Categoria</th>
                <th class="text-center">Cantidad</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Precio</th>
                <th class="text-center">Imagen</th>
                <th>Operacion</th>
                </thead>
                @foreach($productos as $prod)
                <tr>
                    <td class="text-center">{{$prod->idPro}}</td>
                    <td class="text-center">{{$prod->idCat}}</td>
                    <td class="text-center">{{$prod->cantidad}}</td>
                    <td class="text-center">{{$prod->descripcion}}</td>
                    <td class="text-center">{{$prod->precio}} Bs</td>
                    <td class="text-center">
                        <img src="{{asset('imagenes/productos/'.$prod->imgPro)}}" alt="{{$prod->descripcion}}" height="100px" width="100px" class="img-thumbnail">
                    </td>
                    <td>
                        &nbsp;&nbsp
                        <a href="{{URL::action('ProductoController@edit',$prod->idPro)}}"><i class="fa fa-btn fa-pencil"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="" data-target="#modal-delete-{{$prod->idPro}}" data-toggle="modal"><i class="fa fa-btn fa-trash"></i></a>
                    </td>
                </tr>
                @include('almacen.producto.modal')
                @endforeach
            </table>
        </div>

        {{$productos->render()}}
    </div>

</div>


@endsection