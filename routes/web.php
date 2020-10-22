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
Route::get('register', 'App\Http\Controllers\MatrixController@create');
Route::post('registerrr','App\Http\Controllers\MatrixController@store');
Route::get('data', 'App\Http\Controllers\MatrixController@data');

Route::get('commission', 'App\Http\Controllers\CommissionController@index');
Route::post('commission','App\Http\Controllers\CommissionController@save');
Route::get('cmdata', 'App\Http\Controllers\CommissionController@show');