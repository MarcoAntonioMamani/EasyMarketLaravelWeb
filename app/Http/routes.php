<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    
});

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/redirect','SocialAuthController@redirect');
Route::get('/callback','SocialAuthController@callback');


Route::resource('enviador','EnviadorController');


//Route::get('/gmaps', ['as ' => 'gmaps', 'uses' => 'GmapsController@index']);

Route::resource('almacen/categoria','CategoriaController');
Route::resource('almacen/producto', 'ProductoController');

Route::get('mapa/mapaCalor', 'HomeController@mapaCalor');
Route::get('mapa/mapaMarker', 'HomeController@mapaMarker');
