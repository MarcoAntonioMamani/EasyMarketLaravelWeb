@extends ('layouts.admin')
@section ('contenido')

<!DOCTYPE html>

<html>

<body>

        <div class="form-group">
            <label for="nombre">Mes</label>
            <input type="text" name="searchtext" class="form-control" placeholder="Mes...">
        </div>
        <div class="form-group">
            <label for="descripcion">Año</label>
            <input type="text" name="Año" class="form-control" placeholder="Año...">
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit"><i class="fa fa-btn fa-check"></i>Guardar</button>
            <button class="btn btn-danger" type="reset"><i class="fa fa-btn fa-reply"></i>Cancelar</button>
        </div>


</body>
</html>

<html>

<head>

    <title>Laravel 5 - Multiple markers in google map using gmaps.js</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyD8TYMhK5XrkmhQ9AcwbL2fTFzc48svqsU"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>


    <style type="text/css">

        #mymap {

            border:1px solid red;

            width: 800px;

            height: 500px;

        }

    </style>


</head>

<body>
  <h1>Laravel 5 - Multiple markers in google map using gmaps.js</h1>


  <div id="mymap"></div>


  <script type="text/javascript">


    


    var mymap = new GMaps({

      el: '#mymap',

      lat: -17.783344,

      lng: -63.182116,

      zoom:12

    });

    var pedido = <?php print_r(json_encode($pedido)) ?>;


    $.each(pedido, function( index, value ){

        mymap.addMarker({

          lat: value.latitud,

          lng: value.longitud,

        title: value.monto,

          click: function(e) {

            alert('El monto de este pedido es: '+value.monto+' BS.');

          }

        });

   });


  </script>


</body>
</html>
@endsection



