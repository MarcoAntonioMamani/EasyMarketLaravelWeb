<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;
use EasyMarket\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;
use Carbon\Carbon;

class PedidoController extends Controller {
      public function __construct()
    {
        $this->middleware('auth');

    }

    public function destroy($id) {
        DB::table('pedido')->where('idPedido', $id)->delete();
        return response()->json($id);
    }

    public function listarpedido() {
        $results = DB::select("SELECT DISTINCT
        pedido.idPedido,
        pedido.fecha,
        cliente.nombre AS cliente,
        enviador.nombre AS enviador,
        pedido.estado,
        pedido.monto
      FROM
        pedido
        LEFT JOIN detallepedido on detallepedido.idPedido=pedido.idPedido
          INNER JOIN cliente on cliente.idCliente=pedido.idCliente
            LEFT JOIN enviador on enviador.idEnviador=pedido.idEnviador");
        return response()->json($results);
    }

    public function generarPedidos() {
        $date = Carbon::now();
        $fecha = $date->toDateString();
        DB::table('pedido')->insert(['fecha' => $fecha]);

        $results = DB::select("select  pedido.idPedido from pedido  
ORDER BY pedido.idPedido  DESC LIMIT 1");
        return response()->json($results);
    }

    public function buscarProducto($parametro) {
        $producto = DB::select("CALL buscarProducto(?)", [$parametro]);
        return $producto;
    }

    public function listaproductodetallepedido($parametro) {

        $producto = DB::select("CALL listarproducto(?)", [$parametro]);
//        return response()->json($productos);
        return $producto;
    }

    public function update(Request $request, $id) {
        $results = DB::select("SELECT  sum(producto.precio*detallepedido.cantidad) as total
                FROM detallepedido
                INNER JOIN producto  
                INNER JOIN pedido 
                WHERE pedido.idPedido=detallepedido.idPedido
                AND producto.idPro=detallepedido.idProducto 
                AND detallepedido.idPedido = ? " , [$id]);
        
        $monto = $results[0]->total;
        
        $actua = DB::table('pedido')->where('idPedido', $id)->update(['idCliente' => $request->idCliente, 'idEnviador'=> $request->idEnviador, 'estado'=> $request->estado,'monto'=>$monto]);
        return response()->json(["mensaje" => "listo"]);
    }
}
