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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart', 'CartController@checkout')->name('cart.checkout');
Route::get('/cart/{product}/delete', 'CartController@delete')->name('cart.delete');
Route::get('/cart/{product}/add', 'CartController@add')->name('cart.add');

Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/products', 'ProductsController@products')->name('products');
    Route::get('/product', 'ProductsController@create')->name('product.create');
    Route::post('/product/{product?}', 'ProductsController@store')->name('product.store');
    Route::get('/product/{product}/edit', 'ProductsController@edit')->name('product.edit');
    Route::get('/product/{product}/delete', 'ProductsController@destroy')->name('product.destroy');
});

