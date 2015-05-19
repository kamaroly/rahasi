<?php namespace Rahasi\Commands;

use Rahasi\Commands\Command;

use Illuminate\Contracts\Bus\SelfHandling;

class PaymentCommand extends Command{

	/** @var Data transfer Object for the payment */
	public $payment;
	/**
	 * Create a new payment instance.
	 *
	 * @return void
	 */
	public function __construct($payment)
	{
		$this->payment = $payment;
	}

}
