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
        })->name('mainIndex');

        // Resource route that handles the request a quote
        // Route::resource('requestQuote', 'RequestQuoteController');

        // Route that redirects to the indoor signs page
        Route::get('/products/indoor/signs', 'PagesController@indoor_signs_index')->name('indoorSignsIndex');

        // Route that redirects to the outdoor signs page
        Route::get('/products/outdoor/signs', 'PagesController@outdoor_signs_index')->name('outdoorSignsIndex');

        // Route that redirects to the about us page
        Route::get('/about us', 'PagesController@about_us_index')->name('aboutUsIndex');
        
    });

    /*************** End of guest protection ***************/

    /*************** Start of account verification protection ***************/

    Route::group(['middleware' => ['verified']], function() {

        /*************** Start of prevent back history protection ***************/

        Route::group(['middleware' => ['prevent-back-history']], function() {

            /*************** Start of auth protection ***************/

            Route::group(['middleware' => ['auth']], function() {
                Route::group(['middleware' => ['auth:sanctum'], config('jetstream.auth_session')], function() {

                    Route::get('/dashboard', function () {
                        return view('dashboard');
                    })->name('dashboard');

                    Route::get('blog/show/all', 'BlogController@show_all')->name('show-all-index');
                    Route::resource('blog', 'BlogController');

                });
            });
            
            /*************** End of auth protection ***************/

        });

        /*************** End of prevent back history protection ***************/

    });

    /*************** End of account verification protection ***************/

});

/*************** End of XSS protection ***************/



