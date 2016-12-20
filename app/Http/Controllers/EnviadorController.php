<?php

namespace EasyMarket\Http\Controllers;

use Illuminate\Http\Request;

use EasyMarket\Http\Requests;
use EasyMarket\Enviador;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use EasyMarket\Http\Requests\EnviadorFormRequest;
use DB;

class EnviadorController extends Controller
{


	public function __construct(){

	}

	public function index(Request $request){
		if($request){
			$query=trim($request->get('searchText'));
			$enviadores=DB::table('enviador')->where('nombre','LIKE','%'.$query.'%')
			->orderBy('idEnviador','desc')
			->paginate(5);
			return view('enviador.index',["enviadores"=>$enviadores,"searchText"=>$query]);
		}
	}
    
public function create(){

	return view("enviador.create");


}

public function store(EnviadorFormRequest $request){
	$enviador=new Enviador;
	$enviador->nombre=$request->get('nombre');
	$enviador->direccion=$request->get('direccion');
	$enviador->fechaNacimiento=$request->get('fechaNacimiento');

	/*$enviador->imgEnv=$request->get('imgEnv');*/
	if(Input::hasFile('imgEnv')) {
		$file=Input::file('imgEnv');
		$file->move(public_path().'/imagenes/enviador/',$file->getClientOriginalName());
		$enviador->imgEnv=$file->getClientOriginalName();
	}

	$enviador->correo=$request->get('correo');
	$enviador->contrasena=$request->get('contrasena');
	$enviador->save();
	return Redirect::to('enviador');
}

public function show($id){
	return view("enviador.show",["enviador"=>Enviador::findOrFail($id)]);

}

public function edit($id){
	$enviador=Enviador::findOrFail($id);
	return view("enviador.edit",["enviador"=>Enviador::findOrFail($id)]);

}

public function update(EnviadorFormRequest $request,$id){
	$enviador=Enviador::findOrFail($id);
	$enviador->nombre=$request->get('nombre');
	$enviador->direccion=$request->get('direccion');
	$enviador->fechaNacimiento=$request->get('fechaNacimiento');

	/*$enviador->imgEnv=$request->get('imgEnv');*/
if(Input::hasFile('imgEnv')){
		$file=Input::file('imgEnv');
		$file->move(public_path().'/imagenes/enviador/',$file->getClientOriginalName());
		$enviador->imgEnv->$file->getClientOriginalName();
	}

	$enviador->correo=$request->get('correo');
	$enviador->contrasena=$request->get('contrasena');
	$enviador->update();
	return Redirect::to('enviador');
}

public function destroy($id){
	$enviador=Enviador::findOrFail($id);
	$enviador->update();
	return Redirect::to('enviador');
}


}
