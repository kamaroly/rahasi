<?php namespace Rahasi\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//Adding the user id to the settings table
		Setting::setExtraColumns(array(
			    'user_id' => Sentry::getUser()->id;
			));
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}

}
