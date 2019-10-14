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

Route::resource('/cart', 'CartController')->only(['index', 'store', 'update', 'destroy']);

Route::group(['middleware' => ['auth']], function () {
    Route::resource('products', 'ProductsController')->only(['show', 'create', 'store', 'edit', 'destroy', 'update']);
    Route::resource('profile', 'ProductsController')->only(['index', 'update', 'edit']);
    Route::resource('role', 'RolesController')->only(['index', 'store', 'update', 'edit']);;
    Route::resource('profile', 'ProfileController')->only('index', 'update');
});
