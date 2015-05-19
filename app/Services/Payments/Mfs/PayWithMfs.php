<?php namespace Rahasi\Services\Payments\Mfs;

use Exception;
/**
* Charge with MFS
*/
class PayWithMfs
{
  public function charge($paymentInfo)
  {

  		$phoneType = $this->getPhoneType($paymentInfo['phone_number']);

  		$mfsType = '\Rahasi\Services\Payments\Mfs\PayWith'.$phoneType;

  		return (new $mfsType)->charge($paymentInfo);
  }

  public function getPhoneType($phone)
  {
  	// First get last nine digits ex (250722123127 should be 722123127)
  	 $last9Digits = substr($phone,-9);

  	// Get phone number Prefix that will help us to determine the brand of the phone number
  	$prefix 	=	substr($last9Digits,0,2);

  	switch ($prefix) {
  		case '72':
  			return "TigoCash";
  			break;
  		case '78':
  			return "MtnMobileMoney";
  			break;
  		case '73':
  			return "AirtelMoney";
  			break;
  		default:
  			throw new Exception("Unknown telephone number", 1);
  			break;
  	}
  }
}