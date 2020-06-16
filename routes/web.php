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


Route::group([
    'middleware' => 'auth'
], function () {
    Route::post('/getprops', 'MainController@getProps')->name('getProps');
    Route::post('/delimage', 'Admin\ProductController@delMoreImg')->name('delMoreImg');
    Route::group([
        'middleware' => 'isAdmin',
        'prefix' => 'admin'
    ], function () {
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
});

Route::get('/panoramagic', function () {
    return view('panoramagic');
});

Route::get('/professional-plus', function () {
    return view('professional-plus');
});

Route::get('/pro-line', function () {
    return view('pro-line');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{category}', 'MainController@category')->name('category');

Route::get('/{category}/{style}', 'MainController@categoryStyle')->name('category-style');

Route::get('/style/{styles}/{product}', 'MainController@prod')->name('prod');
