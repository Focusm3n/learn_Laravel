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

Route::group(['namespace' => 'App\Http\Controllers'], function(){
    Route::get('/', 'StartController@index');
    Route::get('books', 'StartController@books');

});

Route::group(['middleware' => 'auth', 'namespace' => 'App\Http\Controllers'], function(){
    Route::get('/admin', 'AdminController@index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
