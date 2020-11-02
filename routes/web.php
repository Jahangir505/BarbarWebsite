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

Auth::routes();


Route::get('/', 'WebsiteController@index');
Route::get('/about', 'WebsiteController@about');
Route::get('/contact', 'WebsiteController@contact');
Route::get('/service', 'WebsiteController@service');
Route::get('/gellary', 'WebsiteController@gellary');
Route::post('contact/insert', 'WebsiteController@insert_contact');
Route::post('reservation', 'ReservationController@reserve');



//Admin Routes//
Route::get('admin', 'AdminController@index')->name('');
Route::get('admin/contact', 'ContactController@index')->name('');
Route::get('admin/user','UserController@index')->name('');
Route::get('admin/manage/social','ManageController@social')->name('');
Route::post('admin/manage/social/update','ManageController@update')->name('');
Route::get('admin/contact/view/{id}', 'ContactController@show')->name('');
Route::get('admin/contact/delete/{id}', 'ContactController@delete')->name('');
Route::get('admin/reservation', 'ReserveshowController@index')->name('');
Route::post('admin/reservation/{id}', 'ReserveshowController@status')->name('reservation.status');
Route::delete('admin/reservation/{id}', 'ReserveshowController@destroy')->name('reservation.destroy');
Route::resource('admin/slider','SliderController');
Route::resource('admin/team','TeamController');
Route::resource('admin/gallery','GalleryController');
Route::resource('admin/service','ServiceController');
Route::resource('admin/about','AboutController');
Route::resource('admin/banner','BannerController');
Route::resource('admin/facts','FactsController');
Route::resource('admin/factgrid','FactgridController');
Route::resource('admin/service-on','ServicesController');
