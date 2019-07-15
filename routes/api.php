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

Route::middleware('auth:api')->post('/user', function (Request $request) {
    return $request->user();
});
//for create the data
Route::post('/employee','ApiController@create');
//for show all the data
Route::get('/employee1', 'ApiController@show');
//for show data for the given id
Route::get('/employee1/{id}','ApiController@showbyid');
//for update the data for the given id
Route::put('/employee2/{id}', 'ApiController@updatebyid');
//for delete the data by id
Route::delete('/employee3/{id}', 'ApiController@deletebyid');