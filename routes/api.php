<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::name('api.login')->post('login', 'Api\AuthController@login');

Route::group(['middleware' => ['auth:api']], function(){ //,'jwt.refresh'
    Route::resource('usuarios', 'Api\UsuarioController');
    Route::resource('bairros', 'Api\BairroController');

    Route::post('logout', 'Api\AuthController@logout');
});
