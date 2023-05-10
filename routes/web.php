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

                    Route::get('blog/show/all', 'BlogController@show_all_blog_post_categories')->name('show-all-blog-post-categories');
                    Route::post('blog/create/categories', 'BlogController@store_categories')->name('blog-categories-store');
                    Route::get('blog/create/blog/post/category', 'BlogController@create_blog_post_category')->name('create-blog-post-category-index');
                    Route::get('blog/show/blog/post/category/{id}', 'BlogController@show_blog_post_category')->name('show-blog-post-category');
                    Route::get('blog/show/blog/post/category/edit/{id}', 'BlogController@edit_blog_post_category')->name('edit-blog-post-category');
                    Route::post('blog/show/blog/post/category/edit/{id}', 'BlogController@update_blog_post_category')->name('update-blog-post-category');
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



