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
    return redirect()->home();
})->name('home');

Route::get('/bootstrap', function () {
    return view('layouts.bootstrap');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/{product}/add', 'CartController@add')->name('cart.add');
Route::post('/cart/{product}/remove', 'CartController@remove')->name('cart.remove');
Route::post('/cart/checkout', 'CartController@checkout')->name('cart.checkout');
Route::get('/products-data', 'ProductsDataController@index')->name('products.data');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('/profile', 'ProfileController')->only(['index', 'update']);

    Route::get('/role', 'RolesController@index')->name('role');
    Route::post('/role/{user}/update', 'RolesController@update')->name('role.update');

    Route::resource('/products', 'ProductsController')->except('show');
});
