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
Route::get('singers', 'SingerController@index');
Route::get('singers/{id}', 'SingerController@show');

Route::get('lyrics', 'LyricController@index');
Route::get('lyrics/{id}', 'LyricController@show');
Route::get('lyrics/search/{key}', 'LyricController@search');