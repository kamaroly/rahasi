<?php namespace Rahasi\Handlers\Events;

use Rahasi\Events\ChargeWasRegistered;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;

class ChargeLog {

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
	 * @param  ChargeWasRegistered  $event
	 * @return void
	 */
	public function handle(ChargeWasRegistered $event)
	{
		//
	}

}
