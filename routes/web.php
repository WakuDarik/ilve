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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false
]);

Route::get('currency/{currencyCode}', 'MainController@changeCurency')->name('currency');

Route::group([
    'middleware' => 'auth'
], function () {
    Route::post('/getprops', 'MainController@getProps')->name('getProps');
    Route::post('/delimage', 'Admin\ProductController@delMoreImg')->name('delMoreImg');
    Route::group([
        'middleware' => 'isAdmin',
        'prefix' => 'admin'
    ], function () {
        Route::get('products/sort', 'Admin\ProductController@sort')->name('props.sort');
        Route::resource('products', 'Admin\ProductController');
    });
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/majestic', function () {
    return view('majestic');
})->name('majestic');

Route::get('/nostalgie', function () {
    return view('nostalgie');
})->name('nostalgie');

Route::get('/panoramagic', function () {
    return view('panoramagic');
})->name('nostalgie');

Route::get('/professional-plus', function () {
    return view('professional-plus');
})->name('professional-plus');

Route::get('/pro-line', function () {
    return view('pro-line');
})->name('pro-line');

Route::get('/technologies-of-ovens-and-cooking-and-storage-systems', function () {
    return view('technologies-of-ovens-and-cooking-and-storage-systems');
})->name('technologies-of-ovens');

Route::get('/hob-technologies', function () {
    return view('hob-technologies');
})->name('hob-technologies');

Route::get('/blast-chill-and-store', function () {
    return view('blast-chill-and-store');
})->name('blast-chill-and-store');

Route::get('/colours-and-finishes', function () {
    return view('colours-and-finishes');
})->name('colours-and-finishes');

Route::get('/company', function () {
    return view('company');
})->name('company');

Route::get('/colonna-stellata', function () {
    return view('colonna-stellata');
})->name('colonna-stellata');

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/order/{code}', 'MainController@order')->name('order');

Route::get('/{category}', 'MainController@category')->name('category');

Route::get('/product-info/{product}', 'MainController@productInfo')->name('product-info');

Route::get('/{category}/{style}', 'MainController@categoryStyle')->name('category-style');

Route::get('/style/{styles}/{product}', 'MainController@prod')->name('prod');
