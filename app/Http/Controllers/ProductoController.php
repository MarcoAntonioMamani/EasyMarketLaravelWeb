<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;
use EasyMarket\Http\Requests;
use EasyMarket\Producto;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use EasyMarket\Http\Requests\ProductoFormRequest;
use DB;

class ProductoController extends Controller {

       public function __construct()
    {
        $this->middleware('auth');

    }

    public function index(Request $request) {
        if ($request) {
            $query = trim($request->get('searchText'));
            $productos = DB::table('producto')->where('descripcion', 'LIKE', '%' . $query . '%')
                    ->orderBy('idPro', 'desc')
                    ->paginate(3);
            return view('almacen.producto.index', ['productos' => $productos, 'searchText' => $query]);
        }
    }

    public function create() {
        $categorias = DB::table('categoria')->get();
        return view('almacen.producto.create', ['categorias' => $categorias]);
    }

    public function store(ProductoFormRequest $request) {
        $producto = new Producto;
        $producto->idCat = $request->get('idCat');
        $producto->cantidad = $request->get('cantidad');
        $producto->precio = $request->get('precio');
        $producto->descripcion = $request->get('descripcion');
        if (Input::hasFile('imgPro')) {
            $file = Input::file('imgPro');
            $file->move(public_path() . '/imagenes/productos/', $file->getClientOriginalName());
            $producto->imgPro = $file->getClientOriginalName();
        }
        $producto->save();
        return Redirect::to('almacen/producto');
    }

    public function show($id) {
        return view('almacen.producto.show', ['producto' => Producto::findOrFail($id)]);
    }

    public function edit($id) {
        $categorias = DB::table('categoria')->get();
        //$cate = DB::table('categoria')->select('nombre')->where('idCat','=',$id);

        return view('almacen.producto.edit', ['categorias' => $categorias, 'producto' => Producto::findOrFail($id)]);
    }

    public function update(ProductoFormRequest $request, $id) {
        $producto = Producto::findOrFail($id);
        $producto->idCat = $request->get('idCat');
        $producto->cantidad = $request->get('cantidad');
        $producto->precio = $request->get('precio');
        $producto->descripcion = $request->get('descripcion');
        if (Input::hasFile('imgPro')) {
            $file = Input::file('imgPro');
            $file->move(public_path() . '/imagenes/productos/', $file->getClientOriginalName());
            $producto->imgPro = $file->getClientOriginalName();
        }
        $producto->update();
        return Redirect::to('almacen/producto');
    }

    public function destroy($id) {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return Redirect::to('almacen/producto');
    }

}
