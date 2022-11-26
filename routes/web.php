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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::namespace ('App\Http\Controllers')->group(function () {

    Route::get('/', 'SiteController@index');
    Route::get('shopforshop', 'SiteController@shop');
    Route::get('login', 'SiteController@login');
    Route::get('cart', 'SiteController@cart');
    Route::get('elements', 'SiteController@elements');
    Route::get('confirmation', 'SiteController@confirmation');
    Route::get('checkout', 'SiteController@checkout');

});
