<?php

Route::get('/','WelcomeController@index');
// Dashboard Routes after user signs in 
Route::get('/home',['as'=>'home','middleware'=>'sentry.auth','uses'=>'WelcomeController@dashboard']);
Route::get('/dashboard',['as'=>'dashboard','middleware'=>'sentry.auth','uses'=>'WelcomeController@dashboard']);


Route::group(['prefix'=>'settings','middleware'=>'sentry.auth'],function(){

	// Saving General settings
	Route::get('/general',['as'=>'settings.general.view', 'uses' => 'SettingController@general']);
	Route::post('/save',['as'=>'settings.save', 'uses' => 'SettingController@generalSave']);

	// Saving Api settings
	Route::get('/api',['as'=>'settings.api.view', 'uses' => 'SettingController@api']);
});

Route::resource('/payments', 'PaymentController');

Route::get('/test', function(){
	dd(new \Rahasi\Repositories\Eloquents\MobileRepository);
});
Route::get('/react', function(){
	return view('tests.reactjs');
});

Route::get('/charges/{items}','WelcomeController@gross');

