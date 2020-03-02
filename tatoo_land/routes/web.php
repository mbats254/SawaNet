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
    return view('home.home');

})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all/properties', 'PropertyController@all_properties')->name('all.properties');
Route::get('/create/property', 'PropertyController@create_property')->name('create.properties');
Route::get('/property/page/{uniqid}', 'PropertyController@property_page')->name('property.page');
Route::get('/input/land/details', 'InputController@land_input')->name('land.input');
Route::post('/land/details/post', 'PostController@land_post')->name('land.post');
