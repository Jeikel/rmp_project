<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/changePassword','HomeController@showChangePasswordForm');

Route::post('/changePassword','HomeController@changePassword')->name('changePassword');

Route::resource('/indprofile', 'IndProfileController');

Route::post('/image','IndProfileController@Image');

Route::get('/countries', 'CountriesController@index');

Route::get('/states', 'StatesController@index');

Route::get('/states/{id}', 'StatesController@show');

Route::get('/cstates/{id}', 'StatesController@country');

Route::get('/cities', 'CitiesController@index');

Route::get('/cities/{id}', 'CitiesController@show');

Route::get('/scities/{id}', 'CitiesController@state');


