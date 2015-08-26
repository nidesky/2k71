<?php

Route::get('/', 'HomeController@index');

Route::get('login',     'AuthController@getLogin');
Route::post('login',    'AuthController@postLogin');
Route::get('signup',    'AuthController@getSignup');
Route::post('signup',   'AuthController@postSignup');
