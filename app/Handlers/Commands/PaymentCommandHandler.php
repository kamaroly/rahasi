<?php namespace Rahasi\Handlers\Commands;

use Event;
use Rahasi\Commands\PaymentCommand;
use Rahasi\Services\Payments\Charge;

class PaymentCommandHandler {

	/**
	 * Instance of the charge object
	 * @var Rahasi\Services\Payments\Charge;
	 */
	public $charge;

	function __construct(Charge $charge) {
		$this->charge = $charge;
	}
	/**
	 * Handle the payment Command.
	 *
	 * @param  PaymentCommand  $command
	 * @return void
	 */
	public function handle(PaymentCommand $command) {
		// Create the new payment in the database
		$payment = $this->charge->processPayment($command);

		Event::fire('payment.created', [$payment]);
	}

}
