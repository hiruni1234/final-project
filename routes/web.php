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
})->name('welcome');
Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/courses', function () {
    return view('courses');
})->name('courses');
Route::get('/email', function () {
    return view('email');
})->name('email');
Route::get('/faculty', function () {
    return view('faculty');
});
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/parents', function () {
    return view('parents');
});
Route::get('/resources', function () {
    return view('resources');
});
Route::get('/service', function () {
    return view('service');
})->name('service');
Route::get('/unilife', function () {
    return view('unilife');
});
Route::get('/yourcourse', function () {
    return view('yourcourse');
});
Route::get('/attendance', function () {
    return view('attendance');
})->name('attendance');
Route::get('/transcript', function () {
    return view('transcript');
})->name('transcript');
Route::get('/lecturenotes', function () {
    return view('lecturenotes');
})->name('lecturenotes');
Route::get('/appeals', function () {
    return view('appeals');
})->name('appeals');
Route::get('/interior', function () {
    return view('interior');
})->name('interior');
Route::get('/medicine', function () {
    return view('medicine');
})->name('medicine');
Route::get('/business', function () {
    return view('business');
})->name('business');
Route::get('/software', function () {
    return view('software');
})->name('software');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat', 'ChatController@index')->middleware('auth')->name('chat.index');
Route::get('/chat/{id}', 'ChatController@show')->middleware('auth')->name('chat.show');
Route::post('/chat/getChat/{id}', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/sendChat', 'ChatController@sendChat')->middleware('auth');

//setting the routes for index and send methods//
Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send', 'SendEmailController@send')->name('sendEmail');

Route::post('file/upload', 'FileController@store')->name('file.upload');
Route::post('upload', 'FileController@upload')->name('upload');

Route::get('/sendemail/contact', 'ContactUsController@index');
Route::post('/sendemail/send/contact', 'ContactUsController@send');
