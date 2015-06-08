<?php namespace Rahasi\Events;

use Rahasi\Events\Event;

use Illuminate\Queue\SerializesModels;

class ChargeWasRegistered extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
