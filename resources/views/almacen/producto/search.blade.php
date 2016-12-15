{!! Form::open(array('url'=>'almacen/producto','method'=>'GET', 'autocomplete'=>'off', 'role'=>'search'))!!}

<div class="form-group">
    <div class="input-group">
        <input type="text" name="searchText" class="form-control" placeholder="Buscar..." value="{{$searchText}}">
        <span class="input-group-btn">
            <button class="btn btn-primary" type="submit">
                <i class="fa fa-btn fa-search"></i>
                Buscar
            </button>
        </span>
    </div>
</div>

{{Form::close()}}