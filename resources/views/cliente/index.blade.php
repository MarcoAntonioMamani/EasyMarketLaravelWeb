@extends ('layouts.admin')
@section ('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Clientes <a href="cliente/create"><button class="btn btn-soundcloud"><i class="fa fa-btn fa-plus"></i>Nuevo</button></a></h3>
        @include('cliente.search')
    </div>
</div>


<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th class="text-center">Id</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Correo</th>
                <th class="text-center">Direccion</th>
                <th class="text-center">Telefono</th>
                <th class="text-center">Foto</th>
                <th>Operacion</th>
                </thead>
                @foreach ($clientes as $cliente)
                <tr>
                    <td class="text-center">{{ $cliente->idCliente}}</td>
                    <td class="text-center">{{ $cliente->nombre}}</td>
                    <td class="text-center">{{ $cliente->correo}}</td> 
                    <td class="text-center">{{ $cliente->direccion}}</td> 
                    <td class="text-center">{{ $cliente->telefono}}</td>
                    <td class="text-center">
                        <img src="{{asset('imagenes/clientes/'.$cliente->imgCli)}}" alt="{{$cliente->nombre}}" height="100px" width="100px" class="img-thumbnail">
                    </td>
                    <td>
                        &nbsp;&nbsp;
                        <a href="{{URL::action('ClienteController@edit',$cliente->idCliente)}}"><i class="fa fa-btn fa-pencil"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""data-target="#modal-delete-{{$cliente->idCliente}}" data-toggle="modal"><i class="fa fa-btn fa-trash"></i></a>
                    </td>
                </tr>
                @include('cliente.modal')
                @endforeach
            </table>
        </div>
        {{$clientes->render()}}
    </div>
</div>
@endsection