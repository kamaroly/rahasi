<?php namespace Rahasi\Commands;

use Rahasi\Commands\Command;

class BankCommand extends Command {

	/** @var array of that contains the bank details */
	public $bankDetails;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($bank) {

		$this->bankDetails = $bank;
	}

}
