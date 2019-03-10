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
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/email', function () {
    return view('email');
});
Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/parents', function () {
    return view('parents');
});
Route::get('/resources', function () {
    return view('resources');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/unilife', function () {
    return view('unilife');
});
Route::get('/yourcourse', function () {
    return view('yourcourse');
});
Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/transcript', function () {
    return view('transcript');
});
Route::get('/lecturenotes', function () {
    return view('lecturenotes');
});
Route::get('/appeals', function () {
    return view('appeals');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat', 'ChatController@index')->middleware('auth')->name('chat.index');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');
Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth');


Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send')->name('sendEmail');