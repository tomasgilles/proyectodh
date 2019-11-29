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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/{tipo}/{brand}', 'ProductController@show');

Route::post('/{tipo}/{brand}', 'ProductController@filter');

Route::get('/{tipo}/{brand}/{id}', 'ProductController@show2');

Route::post('/cartadd', 'CartController@store');

Route::get('/cart', 'CartController@index');

Route::post('/cartdelete', 'CartController@update');

Route::post('/cartclose', 'CartController@cartClose');

Route::get('/formulario1', 'ProductController@agregarProducto');

Route::get('/formulario2', 'ProductController@agregarFotos');

Route::post('/productadd', 'ProductController@store');

Route::post('/imagesadd', 'ImagesProductController@store');

Route::post('/busqueda', 'ProductController@busqueda');

Route::get('/productdelete', 'ProductController@borrarProducto');

Route::post('/productdelete', 'ProductController@destroy');

// Route::get('/home', 'HomeController@index')->name('home');
