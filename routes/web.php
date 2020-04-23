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


Route::get('/home','ViewController@home');
Route::get('/about','ViewController@about');

//data
// Route::get('/data','DataController@index');
// Route::get('/data/create','DataController@create');
// Route::get('/data/{data}','DataController@show');
// Route::post('/data','DataController@store');
// Route::delete('/data/{data}','DataController@destroy');
// Route::get('/data/{data}/edit','DataController@edit');
// Route::patch('/data/{data}','DataController@update');
Route::resource('data','DataController');
