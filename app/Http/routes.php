<?php

Route::get('/','WelcomeController@index');
// Dashboard Routes after user signs in 
Route::get('/home',['as'=>'home','middleware'=>'sentry.auth','uses'=>'WelcomeController@dashboard']);
Route::get('/dashboard',['as'=>'dashboard','middleware'=>'sentry.auth','uses'=>'WelcomeController@dashboard']);



Route::group(['prefix'=>'settings','middleware'=>'sentry.auth'],function(){

	Route::get('/general',['as'=>'settings.general', function(){
		 return view('settings.general');
	}]);

	Route::get('/api',['as'=>'settings.api', function(){
		 return view('settings.api');
	}]);

	Route::get('/save', function(){
		Setting::set('foo', 'bar');
		dd(Setting::save());
	});
});