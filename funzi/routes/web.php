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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/input/class', 'SchoolController@addclass')->name('add.new.class');
Route::get('/input/student', 'StudentController@addstudent')->name('add.student');
Route::post('/post/class', 'SchoolController@post_class')->name('post.class');
Route::post('/post/students', 'SchoolController@post_student')->name('post.student');
Route::get('/home', 'HomeController@index')->name('home');
