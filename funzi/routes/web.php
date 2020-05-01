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
Route::get('/set/subjects/{uniqid}', 'SchoolController@set_subjects')->name('set.subjects');
Route::get('/select/teachers', 'SchoolController@select_teachers')->name('select.teachers');


//home routes
Auth::routes(['verify' => true]);
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

//students routes
Route::get('/input/student', 'StudentController@addstudent')->name('add.student');
Route::post('/post/students', 'StudentController@post_student')->name('post.student');
Route::get('/student/home', 'StudentController@student_home')->name('student.home');
Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/view/assignment/{uniqid}', 'StudentController@view_assignment')->name('view.assignment');
    Route::get('/view/lesson/{uniqid}', 'StudentController@view_lesson')->name('view.lesson');
    Route::get('/all/lessons/', 'StudentController@all_lessons')->name('all.lessons');
    Route::get('/all/assignments/', 'StudentController@all_assignments')->name('all.assignments');
});
//user routes
Route::get('/set/credentials/{uniqid}', 'UserController@set_credentials')->name('set.credentials');
Route::post('/post/credentials', 'UserController@post_credentials')->name('post.credentials');
Route::post('/contact/us/', 'UserController@contact_us')->name('contact.us');

//teacher routes

Route::post('/select/subject/post', 'TeacherController@subject_teacher_post')->name('select.subject.post');
Route::get('/teacher/home', 'TeacherController@teacher_home')->name('teacher.home');
Route::get('/select/class', 'TeacherController@select_class')->name('select.class');
Route::get('/upload/assignment/{class_id}/{subject_id}', 'TeacherController@upload_assignment')->name('upload.assignment');
Route::get('/upload/lesson/{class_id}/{subject_id}', 'TeacherController@upload_lesson')->name('upload.lesson');
Route::post('/assignment/post', 'TeacherController@post_assignment')->name('post.assignment');
Route::post('/lesson/post', 'TeacherController@post_lesson')->name('post.lesson');

//parent routes
Route::get('/parent/home', 'StudentController@parent_home')->name('parent.home');
Route::get('/students/my/children', 'StudentController@children_array')->name('children.array');
Route::get('/child/student/details/{uniqid}', 'StudentController@student_details')->name('student.details');

//admin routes
Route::get('/admin/home', 'AdminController@admin_home')->name('admin.home');
Route::get('/view/unapproved', 'AdminController@view_unapproved')->name('view.unapproved');
Route::get('/approve/account/{id}', 'AdminController@approve_account')->name('approve.account');


