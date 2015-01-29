<?php

Route::get('/', 'UsersController@home');
Route::resource('users', 'UsersController');
Route::get('/about', 'UsersController@about');
Route::get('/faq', 'UsersController@faq');
Route::get('/create', 'UsersController@create');
Route::get('/profile', 'UsersController@profile');

Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::resource('sessions', 'SessionsController');

Route::resource('users.questions', 'QuestionsController');
