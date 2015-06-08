<?php namespace Rahasi\Services\Payments;

use Rahasi\Services\Payments\Cards\PayWithCard as Card;
use Rahasi\Services\Payments\Mfs\PayWithMfs as Mfs;

/**
 * Create payment
 */
class Charge {
	/**
	 * Instance of mfs payment
	 * @var Rahasi\Services\Payments\Mfs\PayWithMfs
	 */
	public $mfs;
	/**
	 * Instance of Card payment
	 * @var Rahasi\Services\Payments\Card\PayWithCard
	 */
	public $card;

	function __construct(Mfs $mfs, Card $card) {
		$this->mfs = $mfs;
		$this->card = $card;
	}
	/**
	 * Process payment
	 */
	public function processPayment($paymentInfo) {

		$payment = (array) $paymentInfo;

		$payment = !is_array(last($payment)) ? $payment : array_shift($payment);
		// If we are paying with MFS
		if (array_key_exists('phone_number', $payment)) {
			return $this->mfs->charge($payment);
		}

		//If We are paying with CARD
		if (array_key_exists('card_number', $payment)) {
			return $this->card->charge($payment);
		}

		return false;
	}
}