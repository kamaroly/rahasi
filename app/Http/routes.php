<?php

Route::get('/', 'WelcomeController@index');

// Dashboard Routes after user signs in
Route::get('/dashboard', ['as' => 'home', 'middleware' => 'sentry.auth', 'uses' => 'WelcomeController@dashboard']);

/** Customer routes */
Route::resource('/customers', 'CustomerController');

Route::group(['prefix' => 'account', 'middleware' => 'sentry.auth'], function () {

	// Saving General account
	Route::get('/general', ['as' => 'account.general', 'uses' => 'AccountController@general']);
	Route::post('/save', ['as' => 'account.save', 'uses' => 'AccountController@generalSave']);
	// Saving Api account
	Route::get('/apikeys', ['as' => 'account.apikeys', 'uses' => 'AccountController@api']);

	//showing user configured banks
	Route::get('/banks', ['as' => 'account.banks', 'uses' => 'BankController@index']);
	Route::get('/banks/create', ['as' => 'account.banks.create', 'uses' => 'BankController@create']);
	Route::post('/bank/store', ['as' => 'account.bank.store', 'uses' => 'BankController@store']);
	Route::get('/bank/destory/{bankId}', ['as' => 'account.bank.destroy', 'uses' => 'BankController@destroy']);
	Route::get('/bank/edit/{bankId}', ['as' => 'account.bank.edit', 'uses' => 'BankController@edit']);
	Route::post('/bank/update/{bankId}', ['as' => 'account.bank.update', 'uses' => 'BankController@update']);
	// Route::controller('/banks', 'BankController', ['account.bank']);
	// Showing configurations for the account email
	Route::get('/emails', ['as' => 'account.emails', 'uses' => 'AccountController@index']);

});

Route::resource('/payments', 'PaymentController');
Route::get('/charges/{items}', 'WelcomeController@gross');

/** API ROUTE */

Route::group(['prefix' => 'api/v1'], function () {

	Route::resource('/customers', 'ApiCustomerController');
	Route::resource('/charges', 'ApiChargeControlle');
});