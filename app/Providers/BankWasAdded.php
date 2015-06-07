<?php namespace Rahasi\Providers;

use Rahasi\Events\Event;

use Illuminate\Queue\SerializesModels;

class BankWasAdded extends Event {

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
