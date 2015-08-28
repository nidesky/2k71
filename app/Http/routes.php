<?php

Route::get('/', 'HomeController@index');
Route::get('demo', 'HomeController@demo');

Route::get('login',     'AuthController@getLogin');
Route::post('login',    'AuthController@postLogin');
Route::get('signup',    'AuthController@getSignup');
Route::post('signup',   'AuthController@postSignup');
Route::get('signout',   'AuthController@getSignout');

Route::get('auth/weibo', 'AuthController@getWeibo');
Route::get('auth/weibo-callback', 'AuthController@getWeiboCallback');
Route::get('auth/qq', 'AuthController@getQq');
Route::get('auth/qq-callback', 'AuthController@getQqCallback');
Route::get('auth/github', 'AuthController@getGithub');
Route::get('auth/github-callback', 'AuthController@getGithubCallback');
Route::get('auth/google', 'AuthController@getGoogle');
Route::get('auth/google-callback', 'AuthController@getGoogleCallback');