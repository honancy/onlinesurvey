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


Route::get('mosti', 'ForseoController@index');
Route::post('mosti', 'ForseoController@store');
Route::get('info', function () {
    return view('info');
});


Route::get('/mostiOri', function () {
    $alert = "";
    return view('mosti', compact('alert'));
});


Route::get('mostiall', 'ForseoController@all');
Route::get('mosti/{id}', 'ForseoController@show');

Route::get('{id}/update', 'ForseoController@edit');

Route::resource('mosti', 'ForseoController');
