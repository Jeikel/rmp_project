<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/changePassword','HomeController@showChangePasswordForm');

Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::resource('indprofile', 'IndProfileController');


