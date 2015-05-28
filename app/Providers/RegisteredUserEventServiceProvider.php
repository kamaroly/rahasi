<?php namespace Rahasi\Providers;

use Event,Artisan;
use Illuminate\Support\ServiceProvider;

class RegisteredUserEventServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register()
	{

	Event::listen('sentinel.user.registered', function($user){
		Artisan::call('api-key:generate', [
        '--user-id'=> $user->id
        ]);
	 }, 9);

	}

}
