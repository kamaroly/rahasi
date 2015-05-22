<?php namespace Rahasi\Services\Payments\Mfs\Operators;

use Rahasi\Services\Contracts\PaymentServiceInterface;
use Rahasi\Repositories\Eloquents\MobileRepository as mfs;

/**
* Pay with Tigo Cash interface interface
*/
class PaywithMfsBase implements PaymentServiceInterface{

	/**
	 * Mobile Repository Interface
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

    // First start by transforming the input object
    $paymentTransformed = $this->transform($payment);

		return $this->saveCharge($paymentTransformed);
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
    		return $chargeable->charge()->create($paymentDetails);
   }

  	/**
   	 * Save MFS account the database
   	 * @param array $payment Details
   	 * @return mixed
    */
   protected function saveMobile($paymentDetails)
   {
    	return $this->mfs->create($paymentDetails);
   }

   /**
    * Transform a single mobile
    * @param  array $mobile array
    * @return array 
    */
   protected function transform($mobile)
   {
      // First let's make sure we have an array
      if (! is_array($mobile)) {
         $mobile = (array) $mobile;
       } 
      return [
              'msisdn'               => $mobile['phone_number'],
              'brand'                => $this->brand(),
              'country'              => $mobile['country'],
              'city'                 => $mobile['city'],
              'owner_name'           => $mobile['owner_name'],
              'address'              => $mobile['address'],
              'status'               => isset($mobile['status'])?$mobile['status']:'success',
              'amount'               => isset($mobile['amount'])?$mobile['amount']:0,
              'currency'             => isset($mobile['currency'])?$mobile['currency']:'RWF',
              'captureds'            => isset($mobile['captureds'])?$mobile['captureds']:false,
              'description'          => isset($mobile['description'])?$mobile['description']:null,
              'statement_descriptor' => isset($mobile['statement_descriptor'])?$mobile['statement_desc']:null,
              ];
       
   }


   /**
    * Get current MFS BRAND
    */
   public function brand()
   {
   		return substr(get_called_class(),46);
   }
}