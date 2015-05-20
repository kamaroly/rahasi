<?php namespace Rahasi\Providers;

use Setting,Sentry;
use Illuminate\Bus\Dispatcher;
use Illuminate\Support\ServiceProvider;

class BusServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @param  \Illuminate\Bus\Dispatcher  $dispatcher
	 * @return void
	 */
	public function boot(Dispatcher $dispatcher)
	{
		// If user is authenticated then set userID
		if (\Sentry::check()) {
			Setting::setExtraColumns(array(
		    'user_id' => \Sentry::getUser()->id
		));
		}

		$dispatcher->mapUsing(function($command)
		{
			return Dispatcher::simpleMapping(
				$command, 'Rahasi\Commands', 'Rahasi\Handlers\Commands'
			);
		});
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
