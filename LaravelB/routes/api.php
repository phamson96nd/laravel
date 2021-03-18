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

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
    Route::post('login', 'User\AuthController@login');
    Route::post('logout', 'User\AuthController@logout');
    Route::post('refresh', 'User\AuthController@refresh');
    Route::get('me', 'User\AuthController@me');

});

Route::post('/login/{provider}', 'SocialController@checkUser');
