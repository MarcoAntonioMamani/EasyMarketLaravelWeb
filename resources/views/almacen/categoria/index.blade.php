@extends('layouts.admin')
@section('contenido')
<div class="row">
    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
        <h3>Listado de Categorias <a href="categoria/create">
                <button class="btn btn-soundcloud">
                    <i class="fa fa-btn fa-plus"></i>
                       Nuevo
                </button></a></h3>
        @include('almacen.categoria.search')
    </div>
</div>

<div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                <th class="text-center">ID</th>
                <th class="text-center">Nombre</th>
                <th >Descripcion</th>
                <th>Operacion</th>

                </thead>
                @foreach($categorias as $cat)
                <tr>
                    <td class="text-center">
                        {{$cat->idCat}}	
                    </td>
                    <td class="text-center">
                        {{$cat->nombre}}
                    </td>
                    <td >
                        {{$cat->descripcion}}
                    </td>
                    <td>
                        &nbsp;&nbsp;
                        <a href="{{URL::action('CategoriaController@edit',$cat->idCat)}}"><i class="fa fa-btn fa-pencil"></i></a>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""data-target="#modal-delete-{{$cat->idCat}}" data-toggle="modal"><i class="fa fa-btn fa-trash"></i></a>
                    </td>
                </tr>
                @include('almacen.categoria.modal')
                @endforeach

            </table>
        </div>
        {{$categorias->render()}}
    </div>
</div>
@endsection