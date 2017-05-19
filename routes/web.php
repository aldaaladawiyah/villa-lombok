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
   return view('page.index');
});

Route::get('/book-now', function () {
    return view('page.book-now');
});

Route::get('/special-events', function () {
return view('page.special-events');
});

Route::get('/contact-us', function () {
    return view('page.contact-us');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
