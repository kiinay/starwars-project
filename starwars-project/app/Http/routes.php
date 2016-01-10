<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('customers', 'CustomersController');
Route::resource('product', 'ProductController');


Route::get('/', 'ProductController@index');
Route::get('/category/{id}', 'ProductController@category');
Route::get('/contact', function(){ return view('contact.contact'); });
Route::get('/legal', function(){ return view('legal.legal'); });
Route::get('/register', 'CustomersController@create');


Route::get('/cart', 'CustomersController@cart');
Route::get('/flush-cart', function(){ Session::flush();return redirect('cart'); });

Route::post('add-product', 'CustomersController@addToCart');
Route::post('order', 'CustomersController@order');

Route::controller('auth', 'Auth\AuthController');
Route::get('/admin/dashboard', 'Admin\AdminController@index');
Route::get('/admin/product-form', 'Admin\AdminController@create');
Route::get('/admin/history', 'Admin\AdminController@history');

Route::resource('admin', 'Admin\AdminController');

