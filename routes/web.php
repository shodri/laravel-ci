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

Route::get('/', 'MainController@index')->name('main');

Route::get('products', function () {
    return "This is it";
})->name('products.store');

Route::get('products/create', function () {
    return "Form";
})->name('products.create');

Route::get('products/{product}', function ($product) {
    return "Showing {$product}";
})->name('products.show');

Route::get('products/{product}/edit', function ($product) {
    return "Showing tho form to edit {$product}";
})->name('products.show');

Route::match(['put', 'patch'], 'products/{product}', function ($product) {
    return "Showing {$product}";
})->name('products.show');

Route::delete('products/{product}', function ($product) {
    //
})->name('products.destroy');
