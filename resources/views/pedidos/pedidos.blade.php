@extends ('layouts.admin')
@section ('contenido')
<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

<div class="container">
    <div class="row">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <div class="col s6">
            <h3>Listado de Pedidos</h3>
        </div>
    </div>
    <table id="tablacategoria" class="table table-striped table-bordered table-hover">
        <thead>
        <th>ID</th>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Enviador</th>
        <th>Estado</th>
        <th>Monto</th>
        </thead>
        <tbody id="datos">
        </tbody>
    </table>  
</div>   
<div class="divider"></div>
@stop
@section('scripts')
{!! Html::script('js/addlistapedido.js') !!}
@endsection