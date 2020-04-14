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

//school routes
Route::get('/input/class', 'SchoolController@addclass')->name('add.new.class');
Route::get('/input/teacher', 'SchoolController@addteacher')->name('add.new.teacher');
Route::get('/input/parent/{uniqid?}', 'SchoolController@addparent')->name('add.new.parent');
Route::post('/post/class', 'SchoolController@post_class')->name('post.class');
Route::post('/post/parent', 'SchoolController@post_parent')->name('post.parents');
Route::post('/post/teacher', 'SchoolController@post_teachers')->name('post.teachers');
Route::get('/add/subjects', 'SchoolController@add_subjects')->name('add.subjects');
Route::post('/post/subjects', 'SchoolController@post_subject')->name('post.subject');


//home routes
Route::get('/home', 'HomeController@index')->name('home');


//students routes
Route::get('/input/student', 'StudentController@addstudent')->name('add.student');
Route::post('/post/students', 'StudentController@post_student')->name('post.student');
Route::post('/student/home', 'StudentController@student_home')->name('student.home');

//user routes
Route::get('/set/credentials/{uniqid}', 'UserController@set_credentials')->name('set.credentials');
Route::post('/post/credentials', 'UserController@post_credentials')->name('post.credentials');

//teacher routes
Route::get('/set/subjects', 'TeacherController@set_subjects')->name('set.subjects');
Route::post('/select/subject/post', 'TeacherController@subject_teacher_post')->name('select.subject.post');
Route::get('/teacher/home', 'TeacherController@teacher_home')->name('teacher.home');

//parent routes
Route::get('/parent/home', 'StudentController@parent_home')->name('parent.home');

