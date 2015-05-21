<?php namespace Rahasi\Services\Payments\Mfs\Operators;

use Rahasi\Services\Contracts\PaymentServiceInterface;
use Rahasi\Repositories\Eloquents\MobileRepository as mfs;

/**
* Pay with Tigo Cash interface interface
*/
class PaywithMfsBase implements PaymentServiceInterface{

	/**
	 * Mobile Repository Interface
	 *
	 * @var
	 */
	public $mfs;
	function __construct(mfs $mfs) {

		$this->mfs = $mfs;
	}
	/**
	 * Charge a payment with MFS
	 */
	public function charge($payment){
		return $this->saveCharge($payment);
	}


   	/**
   	 * Save charge the database
   	 * @param array $payment Details
   	 * @return mixed
    */
   protected function saveCharge($paymentDetails)
   {
   	  	if(! $chargeable = $this->saveMobile($paymentDetails)){
   	  		return false;
   	  	}

   	  	//  We made it to here, let's try to save the charge
    	  $chargedata['livemode']	              = false;
    		$chargedata['paid']		                = true;
    		$chargedata['status']	                = 'success';
    		$chargedata['amount']	                = $paymentDetails['amount'];
    		$chargedata['currency']	              = 'RWF';
    		$chargedata['captured']	              = false;
        $chargedata['description']            =   $paymentDetails['description'];
        $chargedata['statement_descriptor']   =   $paymentDetails['statement_desc'];

    		return $chargeable->charge()->create($chargedata);
   }

  	/**
   	 * Save MFS account the database
   	 * @param array $payment Details
   	 * @return mixed
    */
   protected function saveMobile($paymentDetails)
   {
     	$data['msisdn'] 		            =  	$paymentDetails['phone_number'];
    	$data['brand'] 			            =	  $this->brand();
    	$data['country'] 		            =	  null;
    	$data['address_line1'] 	        =	  null;

  	return $this->mfs->create($data);
   }

   /**
    * Get current MFS BRAND
    */
   public function brand()
   {
   		return substr(get_called_class(),46);
   }
}