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

Route::post('/todos', 'Todo\TodoController@post');
Route::patch('/todos/{todo}', 'Todo\TodoController@patch');
Route::get('/todos/{todo}', 'Todo\TodoController@get');
Route::get('/todos', 'Todo\TodoController@cget');
