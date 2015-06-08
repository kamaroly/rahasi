<?php namespace Rahasi\Commands;

use Rahasi\Commands\Command;

class CustomerCreateCommand extends Command {

	public $customerDetails;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($customerDetails) {
		$this->customerDetails = $customerDetails;
	}

}
