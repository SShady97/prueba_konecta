<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::get('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
});

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('advisers','App\Http\Controllers\AdviserController@index');
    Route::post('advisers/new','App\Http\Controllers\AdviserController@store');
    Route::put('advisers/update','App\Http\Controllers\AdviserController@update');
    Route::delete('advisers/delete','App\Http\Controllers\AdviserController@destroy');
    

});

Route::get('users','App\Http\Controllers\UserController@index');
