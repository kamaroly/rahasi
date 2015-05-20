<?php namespace Rahasi\Contracts;

/**
 * Contract for managing charges
 */
interface PaymentServiceInterface{

	/** Create a new charge */
	public function charge($paymentData);

}
