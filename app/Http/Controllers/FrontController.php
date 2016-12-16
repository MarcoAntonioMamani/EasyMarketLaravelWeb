<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;
use EasyMarket\Http\Requests;
use DB;
class FrontController extends Controller
{
        public function vistadepedido() {
        return view('pedidos.pedidos');
    }
   
}
