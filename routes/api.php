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

Route::middleware('auth:api')->get('/usuario', function (Request $request) {
    return $request->user();
});


Route::name('api.login')->post('login', 'Api\AuthController@login');

Route::group(['middleware' => 'auth:api'], function(){

    Route::get('usuarios', 'Api\UsuarioController@index');
    Route::post('logout', 'Api\AuthController@logout');


    //Route::resource('clients', 'ClientController', ['except' => ['create', 'edit']]);
});

//
//Route::group(['middleware' => ['auth:api','jwt.refresh']], function(){
//    Route::get('users', function(){
//        return \App\User::all();
//    });
//    Route::post('logout', 'Api\AuthController@logout');
//    //Route::resource('clients', 'ClientController', ['except' => ['create', 'edit']]);
//});


//Route::post('refresh', 'Api\AuthController@refresh');
//
//
////Req 1 - token XXX - refresh token - YYY
////req2 - token XXX
////req3 - token XXX
//

//
////Auth::guard('api')->user()