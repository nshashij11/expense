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



Route::get('category_list', 'CategoryController@index');
Route::get('category_show/{id}', 'CategoryController@show');
Route::post('category_store', 'CategoryController@store');
Route::post('category_update/{id}', 'CategoryController@update');
Route::get('category_delete/{id}', 'CategoryController@delete');
