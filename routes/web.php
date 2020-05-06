<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DBController@index');
Route::get('/profile/{id}', 'PostController@index');
Route::post('/editprofile/{id}', 'ProfileController@update');

Route::get('/iklan', 'PostController@page');
Route::get('/iklan/search', 'PostController@search');
Route::get('/iklan/{user_id}/{id}', 'PostController@detail');
Route::get('/delete/{user_id}/{id}', 'PostController@delete');
Route::post('/submit', 'PostController@add');

Route::get('/iklan/baju', 'HomeController@baju');
Route::get('/iklan/kamera', 'HomeController@kamera');
Route::get('/iklan/handphone', 'HomeController@handphone');
Route::get('/iklan/laptop', 'HomeController@laptop');
