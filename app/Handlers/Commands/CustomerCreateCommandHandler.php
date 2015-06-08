<?php namespace Rahasi\Handlers\Commands;

use Rahasi\Commands\CustomerCreateCommand;
use Rahasi\Repositories\Eloquents\CustomerRepository;

class CustomerCreateCommandHandler {

	function __construct(CustomerRepository $customer) {
		$this->customer = $customer;
	}
	/**
	 * Handle the command.
	 *
	 * @param  CustomerCreateCommand  $command
	 * @return void
	 */
	public function handle(CustomerCreateCommand $command) {
		// This will return true if $command is a collection
		$command = (array) $command;
		
		$command = array_shift($command);

		$this->customer->create($command);
	}

}
