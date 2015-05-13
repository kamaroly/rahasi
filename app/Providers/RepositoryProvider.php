<?php namespace Rahasi\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider {

	/**
	 * Register the application Repositories interface services.
	 *
	 * @return void
	 */
	public function register()
	{
		// Registering all Repositories
		$this->app->bind(
			'Rahasi\Repositories\Contracts\SettingsRepositoryInterface',
			'Rahasi\Repositories\Settings\SettingRepository'
			);
	}

}
