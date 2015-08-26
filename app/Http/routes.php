<?php

Route::get('/', 'HomeController@index');

Route::get('login',     'AuthController@getLogin');
Route::post('login',    'AuthController@postLogin');
Route::get('signup',    'AuthController@getSignup');
Route::post('signup',   'AuthController@postSignup');

Route::get('auth/weibo', 'AuthController@getWeibo');
Route::get('auth/weibo-callback', 'AuthController@getWeiboCallback');
