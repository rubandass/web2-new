<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PageController;


Route::get('/index', 'PageController@index');
Route::get('/', 'PageController@searchPlayers');
Route::post('/', 'PageController@searchPlayers');
Route::post('/showPlayers', 'PageController@showPlayers');
