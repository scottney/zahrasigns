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

/*************** Start of XSS protection ***************/

Route::group(['middleware' => ['XSS']], function() {

    /*************** Start of guest protection ***************/

    Route::group(['middleware' => ['guest']], function() {

        // Route that redirects to the main homepage
        Route::get('/', function () {
            return view('welcome');
        });

        // Resource route that handles the request a quote
        // Route::resource('requestQuote', 'RequestQuoteController');

        // Route that redirects to the products page
        Route::get('/products', 'PagesController@products_index')->name('routeProductsIndex');

        // Route that redirects to the services page
        //Route::get()->name();

    });

    /*************** End of guest protection ***************/

    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

});

/*************** End of XSS protection ***************/



