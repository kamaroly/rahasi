<?php namespace Rahasi\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */

	protected $listen = [
		'BankWasAdded' => [
			'LogBankWasAdded',
			'BankWasAddedWebHook',
		],
		//Register customer was registered events
		'Rahasi\Events\CustomerWasRegistered' => [
			'Rahasi\Handlers\Events\CustomerLogs',
		],

		'Rahasi\Events\ChargeWasRegistered' => [
			'Rahasi\Handlers\Events\ChargeLog',
		],
		'Rahasi\Events\MobileWasRegistered' => [
			//Mobile was registered events
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events) {
		parent::boot($events);

		//
	}

}
