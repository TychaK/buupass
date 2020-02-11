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
    return view('home');
});

Route::post('/search-flight', 'SearchController@search_flight');
Route::post('/login', 'UsersController@login');
Route::post('/signup', 'UsersController@sign_up');
Route::post('/search-place', 'SearchController@search_airport');
Route::get('/login', function () {
    return view('login');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/flights', function () {
    return view('flights');
});
Route::get('/my-account', 'UsersController@my_account');
Route::get('/logout', 'UsersController@logout');
