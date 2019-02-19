<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!|
*/

Route::name('api.login')->post('login', 'Api\AuthController@login');
Route::get('bairros', 'Api\BairroController@index');
Route::get('idiomas', 'Api\IdiomaController@index');
Route::get('etinias', 'Api\EtiniaController@index');

Route::group(['middleware' => ['auth:api']], function(){ //,'jwt.refresh'
    Route::delete('usuarios/{usuario}', 'Api\UsuarioController@destroy');
    Route::post('logout', 'Api\AuthController@logout');
});

Route::resource('usuarios', 'Api\UsuarioController', ['except'=> ['create','edit','destroy']]);