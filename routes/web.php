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
    return view('welcome');
});

// Route::get('/', 'PageController@index');
// Route::get('/about', 'PageController@about');
// Route::get('/contact', 'PageController@contact');
// Route::get('/testimonials', 'PageController@testimonials'); 
// Route::get('/features', 'PageController@features');
// Route::get('/pricing', 'PageController@pricing');
// Route::get('/team', 'PageController@team');