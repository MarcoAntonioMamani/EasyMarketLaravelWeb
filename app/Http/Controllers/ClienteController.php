<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;
use EasyMarket\Http\Requests;
use EasyMarket\Cliente;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use EasyMarket\Http\Requests\ClienteFormRequest;
use DB;

class ClienteController extends Controller {

    public function __construct() {
        
    }

    public function index(Request $request) {
        if ($request) {
            $query = trim($request->get('searchText'));
            $clientes = DB::table('cliente')->where('nombre', 'LIKE', '%' . $query . '%')
                    ->orderBy('idCliente', 'desc')
                    ->paginate(5);
            return view('cliente.index', ['clientes' => $clientes, "searchText" => $query]);
        }
    }

    public function create() {
        return view("cliente.create");
    }

    public function store(ClienteFormRequest $request) {
        $cliente = new Cliente;
        $cliente->nombre = $request->get('nombre');
        $cliente->correo = $request->get('correo');
        $cliente->direccion = $request->get('direccion');
        $cliente->telefono = $request->get('telefono');
        if (Input::hasFile('imgCli')) {
            $file = Input::file('imgCli');
            $file->move(public_path() . '/imagenes/clientes/', $file->getClientOriginalName());
            $cliente->imgCli = $file->getClientOriginalName();
        }
        $cliente->save();
        return Redirect::to('cliente');
    }

    public function show($id) {
        return view('cliente.show', ["cliente" => Cliente::findOrFail($id)]);
    }

    public function edit($id) {
        return view('cliente.edit', ["cliente" => Cliente::findOrFail($id)]);
    }

    public function update(ClienteFormRequest $request, $id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->nombre = $request->get('nombre');
        $cliente->correo = $request->get('correo');
        $cliente->direccion = $request->get('direccion');
        $cliente->telefono = $request->get('telefono');
        if (Input::hasFile('imgCli')) {
            $file = Input::file('imgCli');
            $file->move(public_path() . '/imagenes/clientes/', $file->getClientOriginalName());
            $cliente->imgCli = $file->getClientOriginalName();
        }
        $cliente->update();
        return Redirect::to('cliente');
    }

    public function destroy($id) {
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        return Redirect::to('cliente');
    }

}
