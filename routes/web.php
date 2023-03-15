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

        // Route that redirects to the malls and buildings page
        Route::get('/products/malls and buildings signs', 'PagesController@malls_and_buildings_index')->name('mallsAndBuildingsIndex');

        // Route that redirects to the about us page
        Route::get('/about us', 'PagesController@about_us_index')->name('aboutUsIndex');

        // Route that redirects to the community service page
        Route::get('/community service', 'PagesController@community_service_index')->name('communityServiceIndex');

    });

    /*************** End of guest protection ***************/

    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });

});

/*************** End of XSS protection ***************/



