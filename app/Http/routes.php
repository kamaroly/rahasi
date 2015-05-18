<?php


Route::get('/','WelcomeController@index');
// Dashboard Routes after user signs in 
Route::get('/home',['as'=>'home','middleware'=>'sentry.auth','uses'=>'WelcomeController@dashboard']);
Route::get('/dashboard',['as'=>'dashboard','middleware'=>'sentry.auth','uses'=>'WelcomeController@dashboard']);


Route::group(['prefix'=>'settings','middleware'=>'sentry.auth'],function(){

	// Saving General settings
	Route::get('/general',['as'=>'settings.general.view', 'uses' => 'SettingController@general']);
	Route::post('/general',['as'=>'settings.general.save', 'uses' => 'SettingController@generalSave']);

	// Saving Api settings
	Route::get('/api',['as'=>'settings.api.view', 'uses' => 'SettingController@api']);
	Route::post('/api',['as'=>'settings.api.save', 'uses' => 'SettingController@apiSave']);

});


Route::group(['prefix'=>'payments'], function(){

		Route::get('/', function(){
			return view('payments.index');
		});

		Route::get('/new',['as'=>'payments.form', function(){
			return view('payments.form');
		}]);
});