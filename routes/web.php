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
Route::get('/','App\Http\Controllers\UserController@login')->name('login');
Route::get('/register','App\Http\Controllers\UserController@index')->name('register');
Route::any('/postLogin','App\Http\Controllers\UserController@postLogin');
Route::post('/simpanRegister','App\Http\Controllers\UserController@simpanRegister');

Route::group(['middleware' => ['auth', 'CheckRole:pengguna']], function(){

    Route::get('/home','App\Http\Controllers\PerjalananController@index');
    Route::get('/form','App\Http\Controllers\PerjalananController@form');
    Route::get('/user','App\Http\Controllers\UserController@showUser');
    Route::post('/simpanPerjalanan','App\Http\Controllers\PerjalananController@simpanPerjalanan');
    Route::any('/logout','App\Http\Controllers\UserController@logout');

});