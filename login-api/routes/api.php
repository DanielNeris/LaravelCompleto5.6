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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function() {
    Route::post('registro', 'AutenticadorController@register');
    Route::post('login', 'AutenticadorController@login');
    Route::get('registro/ativar/{id}/{token}', 'AutenticadorController@ativarregistro');
    Route::middleware('auth:api')->group(function() {
        Route::post('logout', 'AutenticadorController@logout');
    });
});

Route::get('produtos', 'ProdutosController@index')->middleware('auth:api');