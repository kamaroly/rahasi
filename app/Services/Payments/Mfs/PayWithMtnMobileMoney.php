<?php namespace Rahasi\Services\Payments\Mfs;

use Rahasi\Contracts\PaymentServiceInterface;


/**
* Pay with Tigo Cash interface interface
*/
class PayWithMtnMobileMoney implements PaymentServiceInterface{

	/**
	 * Charge a payment with MFS
	 */
	public function charge($payment){

		return 'Paid with  Mtn Mobile money';
	}
}