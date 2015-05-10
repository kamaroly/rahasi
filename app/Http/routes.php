<?php

Route::get('/',['as'=>'home','middleware'=>'sentry.auth','uses'=>'WelcomeController@index']);
Route::get('/dashboard',['as'=>'dashboard','middleware'=>'sentry.auth','uses'=>'WelcomeController@index']);


// settings routes
Route::get('/settings', ['as'=>'settings.index',function(){
	return view('settings.general');
}]);