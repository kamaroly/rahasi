<?php namespace Rahasi\Events;

use Rahasi\Events\Event;

use Illuminate\Queue\SerializesModels;

class CustomerWasRegistered extends Event {

	use SerializesModels;

	public $customerDetails;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct($customerDetails)
	{
		$this->customerDetails = $customerDetails;
	}

}
