<?php namespace Rahasi\Handlers\Commands;

use Event;
use Rahasi\Commands\PaymentCommand;
use Rahasi\Services\Payments\Charge;

use Illuminate\Queue\InteractsWithQueue;

class PaymentCommandHandler {

	/**
	 * Handle the payment Command.
	 *
	 * @param  PaymentCommand  $command
	 * @return void
	 */
	public function handle(PaymentCommand $command)
	{
		// Create the new payment in the database
		$payment = (new Charge)->processPayment($command);

		Event::fire('payment.created', [$payment]);
	}

}
