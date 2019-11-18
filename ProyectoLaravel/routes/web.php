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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/botines/nike', 'ProductController@show');

Route::get('/botines/nike/{id}', 'ProductController@show2');

// Route::get('/home', 'HomeController@index')->name('home');
