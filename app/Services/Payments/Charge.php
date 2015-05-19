<?php namespace Rahasi\Services\Payments;

use Rahasi\Services\Payments\Mfs\PayWithMfs;
use Rahasi\Services\Payments\Card\PayWithCard;
/**
* Create payment
*/
class Charge
{
	public function processPayment($paymentInfo){

		$payment = (array) $paymentInfo;

		$payment = array_shift($payment);

		// If we are paying with MFS
		if (array_key_exists('phone_number', $payment)) {
			return (new PayWithMfs)->charge($payment);
		}

		//If We are paying with CARD
		if(array_key_exists('card_number', $payment)){
			return (new PayWithCard)->charge($payment);
		}
	}
}