<?php

Route::get('/', 'UsersController@home');
Route::resource('users', 'UsersController');
Route::get('/about', 'UsersController@about');
Route::get('/faq', 'UsersController@faq');
Route::get('/create', 'UsersController@create');
Route::get('/profile', 'UsersController@profile');
Route::get('/forum', 'UsersController@forum');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::resource('questions', 'QuestionsController');
Route::get('username', 'QuestionsController@username');
Route::get('/email', 'QuestionsController@email');
Route::get('/password', 'QuestionsController@password');
