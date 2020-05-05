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
})->name('welcome');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add/film', 'FilmController@add_film')->name('add.film');
Route::post('/post/film', 'FilmController@post_film')->name('post.film');
});
