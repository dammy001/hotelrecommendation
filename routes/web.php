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
//Admin
Route::get('/admin', 'AdminController@index')->name('admin');
Route::post('/login', 'AdminController@login')->name('login');
Route::get('/logout', 'AdminController@logout')->name('admin.logout');
Route::get('/admin/dashboard', 'AdminController@dashboard')->name('admin.dashboard');
Route::get('/admin/hotels', 'AdminController@hotels')->name('admin.hotels');
Route::get('/admin/addhotel', 'AdminController@addhotel')->name('admin.addhotel');
Route::post('/admin/addhotel', 'AdminController@add')->name('admin.addhotel');
Route::get('/admin/bookings', 'AdminController@bookings')->name('admin.bookings');
Route::get('/admin/addroom', 'AdminController@addroom')->name('admin.addroom');
Route::get('/admin/rooms', 'AdminController@rooms')->name('admin.rooms');
Route::get('/admin/category', 'AdminController@category')->name('admin.category');
Route::get('/admin/addcategory', 'AdminController@addcategory')->name('admin.addcategory');
Route::post('/admin/category', 'AdminController@store')->name('admin.category');

Route::get('/', 'HomeController@index')->name('home');

//Login And Register
Route::get('/listhotel', 'HomeController@listhotel')->name('listhotel');
Route::post('/login', 'CustomerController@login')->name('login');

//book
Route::get('/book/{roomname}', 'CustomerController@book')->name('book');
Route::post('/book/book', 'BookingController@store')->name('book.store');

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/signup', 'HomeController@signup')->name('signup');
Route::post('/signup', 'CustomerController@store')->name('signup');

Route::get('/contact', 'HomeController@contactus')->name('contact');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/popular/{location}', 'PopularLocationController@show')->name('popular');

Route::get('/hotels', 'HotelController@index')->name('hotels');
Route::get('/{id}', 'HotelController@show')->name('hoteldetails');


//search
Route::any('/search', 'HotelController@search')->name('search');
Route::get('/search', 'HomeController@search')->name('search');




