<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;

use EasyMarket\Http\Requests;

class GmapsController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');

    }
 public function index()
    {
        //configuaración

      
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 400;
        $config['map_height'] = 400;
        $config['zoom'] = 15;
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';
 
        \Gmaps::initialize($config);
 
        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        \Gmaps::add_marker($marker);
 
        $map = \Gmaps::create_map();
 
        //Devolver vista con datos del mapa
        return view('gmaps', compact('map'));
    }





 
 
}
