<?php

Route::get('/', 'WelcomeController@index');

Route::get('/comming', function () {
	return view('comming_soon');
});
// Dashboard Routes after user signs in
Route::get('/home', ['as' => 'home', 'middleware' => 'sentry.auth', 'uses' => 'WelcomeController@dashboard']);
Route::get('/dashboard', ['as' => 'dashboard', 'middleware' => 'sentry.auth', 'uses' => 'WelcomeController@dashboard']);

Route::group(['prefix' => 'account', 'middleware' => 'sentry.auth'], function () {

	// Saving General account
	Route::get('/general', ['as' => 'account.general', 'uses' => 'AccountController@general']);
	Route::post('/save', ['as' => 'account.save', 'uses' => 'AccountController@generalSave']);
	// Saving Api account
	Route::get('/apikeys', ['as' => 'account.apikeys', 'uses' => 'AccountController@api']);

	//showing user configured banks
	Route::get('/banks', ['as' => 'account.banks', 'uses' => 'BankController@index']);
	Route::get('/banks/create', ['as' => 'account.banks.create', 'uses' => 'BankController@create']);
	Route::post('/bank/store', ['as' => 'account.banks.store', 'uses' => 'BankController@store']);
	// Showing configurations for the account email
	Route::get('/emails', ['as' => 'account.emails', 'uses' => 'AccountController@index']);

});

Route::resource('/payments', 'PaymentController');

Route::get('/charges/{items}', 'WelcomeController@gross');

Route::group(['prefix' => 'api/ajax'], function () {

	Route::get('/apikeys/{keyType}', 'AccountController@newKey');
});
