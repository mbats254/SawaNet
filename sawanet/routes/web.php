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
Route::get('/set/credentials/user/{uniqid}', 'UserController@set_credentials')->name('set.credentials');
Route::post('/credentials/user/post', 'UserController@credentials_post')->name('credentials.post');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
Route::get('/home', 'HomeController@index')->name('home');

//customer routes
Route::get('/all/packages', 'UserController@all_packages')->name('all.packages');
Route::get('/subscribe/package/{uniqid}', 'UserController@subscribe_package')->name('subscribe.package');

//admin routes
Route::get('/admin/home', 'HomeController@admin_home')->name('admin.home');
Route::get('/add/new/customer', 'AdminController@add_new_user')->name('add.new.user');
Route::get('/add/packages', 'AdminController@add_packages')->name('add.packages');
Route::get('/user/subscriptions', 'AdminController@user_subscriptions')->name('user.subscription');
Route::get('/confirm/payments/{uniqid}', 'AdminController@confirm_payments')->name('confirm.payments');
Route::post('/post/package', 'AdminController@post_package')->name('post.package');
Route::post('/post/customer', 'AdminController@post_new_user')->name('post.new.user');
Route::post('/post/payments', 'AdminController@payments_confirmation_post')->name('payments.confirmation.post');
Route::post('/post/customer/payments', 'AdminController@customer_payment_post')->name('customer.payment.post');
Route::get('/send/payment/notification/{uniqid}', 'AdminController@send_payment_notification')->name('send.payment.notification');
Route::get('/enter/payment/details/{uniqid}', 'AdminController@enter_payment_details')->name('enter.payment.details');
Route::get('/installation/confirmation/{uniqid}', 'AdminController@installation_confirmation')->name('installation.confirmation');
Route::get('/add/customer/subscription', 'AdminController@customer_subscription')->name('add.customer.subscription');
Route::post('/post/customer/subscription', 'AdminController@post_customer_subscription')->name('post.customer.package');

});
