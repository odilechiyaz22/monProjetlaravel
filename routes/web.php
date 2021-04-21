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

Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','App\Http\Controllers\NaissanceController@index');
Route::get('/index','App\Http\Controllers\NaissanceController@index');
Route::get('/edit/{id}','App\Http\Controllers\NaissanceController@edit');
Route::get('/delete/{id}','App\Http\Controllers\NaissanceController@destroy');
Route::get('/create','App\Http\Controllers\NaissanceController@create');
Route::post('/store','App\Http\Controllers\NaissanceController@store');
Route::post('/update/{id}','App\Http\Controllers\NaissanceController@update');