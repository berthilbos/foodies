<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', '\App\Http\Controllers\HomeController@index');


 Auth::routes();

 Route::get('/', function () {
    return view('home');
});
Route::group(['middleware' => ['auth']], function() {
    Route::resource('/roles','App\Http\Controllers\RoleController');
    Route::resource('/users', 'App\Http\Controllers\UserController');
    Route::resource('/restaurants','App\Http\Controllers\RestaurantmanageController');
    Route::resource('products','App\Http\Controllers\ProductController');
    Route::get('orders/{order}/order','App\Http\Controllers\ShoppingController@order');
    Route::get('session', 'App\Http\Controllers\ShoppingController@put')->name('session');
    Route::get('getsession', 'App\Http\Controllers\ShoppingController@get')->name('getsession');
    Route::get('delete', 'App\Http\Controllers\ShoppingController@delete')->name('delete');
    Route::get('orders.show', 'App\Http\Controllers\ShoppingController@show')->name('show');
    Route::get('orders.confirm', 'App\Http\Controllers\ShoppingController@purchase')->name('purchase');
    
    });
 

Route::get('/info', function () {
    return view('info');
});



 Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact');
 Route::get('/restaurant', 'App\Http\Controllers\RestaurantController@index')->name('restaurant');
 Route::post('/search', 'App\Http\Controllers\AreaController@index')->name('searchresults');
 Route::get('/restaurants/{show}', '\App\Http\Controllers\RestaurantController@show')->name('restaurants.show');
 Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
 Route::get('test', function() { return view('testurl');});


 