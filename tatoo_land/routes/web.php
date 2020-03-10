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
Route::get('image/{filename}', 'PropertyController@displayImage')->name('image.displayImage');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/all/properties', 'PropertyController@all_properties')->name('all.properties');
Route::get('/create/property', 'PropertyController@create_property')->name('create.properties');
Route::get('/property/page/{uniqid}', 'PropertyController@property_page')->name('property.page');
Route::get('/input/land/details', 'InputController@land_input')->name('land.input');
Route::get('/input/category/details', 'InputController@category_input')->name('category.input');
Route::get('/property/details/{uniqid}', 'PropertyController@property_details')->name('property.details');
Route::post('/land/details/post', 'PostController@land_post')->name('land.post');
Route::post('/category/post', 'PostController@category_post')->name('categories.post');
