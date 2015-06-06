<?php

Route::get('/', 'WelcomeController@index');

Route::get('/comming', function () {
	return view('comming_soon');
});
// Dashboard Routes after user signs in
Route::get('/home', ['as' => 'home', 'middleware' => 'sentry.auth', 'uses' => 'WelcomeController@dashboard']);
Route::get('/dashboard', ['as' => 'dashboard', 'middleware' => 'sentry.auth', 'uses' => 'WelcomeController@dashboard']);

Route::group(['prefix' => 'account', 'middleware' => 'sentry.auth'], function () {

	// Saving General settings
	Route::get('/general', ['as' => 'settings.general', 'uses' => 'SettingController@general']);
	Route::post('/save', ['as' => 'settings.save', 'uses' => 'SettingController@generalSave']);

	// Saving Api settings
	Route::get('/apikeys', ['as' => 'settings.api.view', 'uses' => 'SettingController@api']);

	Route::get('/transfers', ['as' => 'settings.transfers', 'uses' => 'SettingController@transfers']);

	Route::get('/transfers/add', ['as' => 'settings.transfers.add', 'uses' => 'SettingController@transfersAdd']);
});

Route::resource('/payments', 'PaymentController');

Route::get('/charges/{items}', 'WelcomeController@gross');

Route::group(['prefix' => 'api/ajax'], function () {

	Route::get('/apikeys/{keyType}', 'SettingController@newKey');
});
