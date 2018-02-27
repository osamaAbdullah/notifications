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

//database
Route::get('/database/notification','NotificationsController@DatabaseNotification');

//mail
Route::get('/mail/notification','NotificationsController@MailNotification');

//sms
Route::get('/sms/notification','NotificationsController@SmsNotification');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
