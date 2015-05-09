<?php

Route::get('/',['as'=>'home','middleware'=>'sentry.auth','uses'=>'WelcomeController@index']);
Route::get('/dashboard',['as'=>'dashboard','middleware'=>'sentry.auth','uses'=>'WelcomeController@index']);

Route::get('/login2', function(){
	return view('Sentinel::sessions.login2');
});