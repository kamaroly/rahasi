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
		'\Rahasi\Events\BankWasAdded' => [
			'\Rahasi\Handlers\Events\ValidateBankDetails',
			'\Rahasi\Handlers\Events\LogBankWasAdded',

		],
		'\Rahasi\Events\DidSomethingEvent' => [
			'\Rahasi\Handlers\Events\RespondOneWay',
			'\Rahasi\Handlers\Events\RespondAnotherWay',
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
