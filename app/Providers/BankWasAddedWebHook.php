<?php namespace Rahasi\Providers;

use Rahasi\Providers\BankWasAdded;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class BankWasAddedWebHook {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

	/**
	 * Handle the event.
	 *
	 * @param  BankWasAdded  $event
	 * @return void
	 */
	public function handle(BankWasAdded $event)
	{
		//
	}

}
