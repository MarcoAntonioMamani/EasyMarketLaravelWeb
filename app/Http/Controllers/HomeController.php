<?php

namespace EasyMarket\Http\Controllers;

use EasyMarket\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function mapaCalor()

    {

        //$pedido = DB::table('pedido')->where('fecha','like','%%/08%%%%%')->get();

        $pedido = DB::table('pedido')->get();
        return view('mapa.mapaCalor',compact('pedido'));




    }


    public function indexa(Request $request){
        if($request)
        {
            $query=trim($request->get('searchText'));
            $pedido=DB::table('pedido')->where('fecha','LIKE','%%/'.$query.'%')->get();
                  return view('mapa.mapaCalor',compact('pedido'));
        }
    }




    public function mapaMarker()

    {

        //$pedido = DB::table('pedido')->where('fecha','like','%%/08%%%%%')->get();

        $pedido = DB::table('pedido')->get();
        return view('mapa.mapaMarker',compact('pedido'));

    }




}
