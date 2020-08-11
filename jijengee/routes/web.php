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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/add/theme','ThemeController@add_theme')->name('add.theme');
    Route::get('/select/theme','ThemeController@select_theme')->name('select.theme');
    Route::post('/post/theme','ThemeController@post_theme')->name('post.theme');
    Route::get('/site/content/post','ThemeController@site_content')->name('site.content');
    Route::get('/field/content/connect','ThemeController@field_connect')->name('field.connect');
    Route::get('/view/theme/{uniqid}','ThemeController@view_theme')->name('view_theme');
});

Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth','verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});
