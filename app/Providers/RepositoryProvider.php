<?php namespace Rahasi\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider {

	/**
	 * Register the application Repositories interface services.
	 *
	 * @return void
	 */
	public function register() {
		// Registering all Repositories
		$this->bootRepositories();
	}

	protected function bootRepositories() {

		$this->app->bind('Rahasi\Repositories\Eloquents\Repository', 'Rahasi\Repositories\Eloquents\Repository');
		// Bind mobile repository interface
		$this->app->bind(
			'Rahasi\Repositories\Contracts\MobileRepositoryInterface',
			'Rahasi\Repositories\Eloquents\MobileRepository'
		);

		//Bind mobile repository interface
		$this->app->bind(
			'Rahasi\Repositories\Contracts\ChargeRepositoryInterface',
			'Rahasi\Repositories\Eloquents\ChargeRepository'
		);

		//Bind mobile repository interface
		$this->app->bind(
			'Rahasi\Repositories\Eloquents\CustomerRepository',
			'Rahasi\Repositories\Eloquents\CustomerRepository'
		);

	}

}
