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

Route::get('/helloworld', 'ApiTestController@helloworld');
Route::get('/fibonacci/{n}', 'ApiTestController@fibonacci');

Route::get('/user', 'ApiUserController@get');
Route::get('/user/{user}', 'ApiUserController@getOne');
Route::post('/user', 'ApiUserController@create');
Route::put('/user/{uuid}', 'ApiUserController@update');
Route::delete('/user/{uuid}', 'ApiUserController@delete');

Route::get('/role', 'ApiRoleController@get');
Route::get('/role', 'ApiRoleController@get');
Route::post('/role', 'ApiRoleController@create');
Route::put('/role/{uuid}', 'ApiRoleController@update');
Route::delete('/role/{uuid}', 'ApiRoleController@delete');