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

use App\Http\Controllers\NewsController;

Route::get('/', 'NewsController@index');
Route::resource('news', 'NewsController');
Route::get('/content/{id}', 'NewsController@content');

Route::get('/signIn', 'SignController@signIn');
Route::post('/signIn', 'SignController@verify');
Route::get('/signOut', 'SignController@signOut');

Route::resource('category', 'CategoryController');
