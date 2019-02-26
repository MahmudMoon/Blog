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

Route::get('/','PageController@getIndex');

Route::get('/about','PageController@getAbout');

Route::get('/contact','PageController@getContact');
 
Route::resource('posts','PostController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('user','\App\Http\Controllers\Auth\LoginController@user_name');
Route::get('sendmail', function () {

	$user = \App\User::find(1);

    Mail::to($user->email)->send(new \App\Mail\sendMail($user));

    

    dd("Email is Send.");

});


Route::post('/contact','mailconroller@sendmail');

