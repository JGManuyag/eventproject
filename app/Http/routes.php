<?php

//events route

Route::resource('events','EventController');

Route::get('manage/events', 'EventController@manage');

Route::get('createEvent', 'EventController@create');

Route::get('events/{id}/attendees', ['as' => 'events.attendees.get', 'uses' => 'EventController@show']);

Route::get('events/{id}/guests', ['as' => 'events.guests.get', 'uses' => 'EventController@showGuest']);


//attendees route

Route::resource('attendees','AttendeeController');

Route::get('/manage/attendees', 'AttendeeController@manage');

Route::get('createAttendee', 'AttendeeController@create');

Route::get('/add/{id}', 'AttendeeController@add');

Route::get('/multiple/{id}', 'AttendeeController@multiple');


//guest route

Route::resource('guests','GuestController');

Route::get('createGuest', 'GuestController@create');

Route::get('manage/guests', 'GuestController@manage');

Route::get('/addGuest/{id}', 'GuestController@add');


//participants route

Route::resource('participants','ParticipantController');


//clark route

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('settings', 'UserController');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');	
