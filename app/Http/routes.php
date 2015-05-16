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

Route::get('/react', function(){
	return view('tests.reactjs');
});

Route::get('/charge/{chargeId}', function($chargeId){

	$charge = \Rahasi\Repositories\Eloquents\Charge::find($chargeId);

	$chargedata = $charge->toArray();
	// Remove all unnecessary information
	$chargedata['source'] = $charge->chargeable;
	return $chargedata;
});

Route::get('/customer/{id}/{type}', function($id,$type){

	$customer = \Rahasi\Repositories\Eloquents\Customer::find($id);

	if ($type=='mobile') {
		return $customer->mobile;
	}

	return $customer->cards;
});

Route::get('/mobile/{id}', function($id){

	$mobile = \Rahasi\Repositories\Eloquents\Mobile::find($id);

	return $mobile->customer;
});
