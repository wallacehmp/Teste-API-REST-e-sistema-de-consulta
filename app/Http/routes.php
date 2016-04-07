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

Route::group(['prefix' => 'api'], function()
{
    Route::group(['prefix' => 'user'], function()
    {
        Route::get('{id}', ['uses' => 'UserController@getUser']);
    });
    Route::group(['prefix' => 'sintegra'], function()
    {
        Route::get('{cnpj}', ['uses' => 'SintegraController@getCNPJ']);  

        Route::post('', ['uses' => 'SintegraController@saveDados']);

        Route::get('', ['uses' => 'SintegraController@getListaConsultas']);

        Route::delete('{id}', ['uses' => 'SintegraController@deleteRegistros']);
    });
});

Route::get('/', function () {
    return view('home');
});

Route::get('/consulta', function () {
    return view('consulta');
});

Route::get('/consultaSalva', function () {
    return view('consultaSalva');
});

Route::post('login', 'AuthController@postLogin');

