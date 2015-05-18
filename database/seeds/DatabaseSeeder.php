<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
	// SEEDING DB 
	$count = 0;
	while ($count <= 800) {
	// Create chargable class
	// $data['id']		=  uniqid('mobile_');
	$data['msisdn'] =  rand(25072200001,250722123100);
	$data['brand'] ='Tigo';
	$data['country'] ='RW';
	$data['address_line1'] ='Kigali/Rwanda';

	$mfs = new \Rahasi\Repositories\Eloquents\Mobile;
	$mfs->unguard();

	// $chargedata['id']		=  uniqid('ch_');
	$chargedata['livemode']	= false;
	$chargedata['paid']		= true;
	$chargedata['status']	= 'success';
	$chargedata['amount']	= rand(500,1000000);
	$chargedata['currency']	= 'RWF';
	$chargedata['captured']	= false;

	$chargeable = $mfs->create($data);

	$charge = $chargeable->charge()->create($chargedata);

	$count++;
	}

	$count = 0;
	while ($count <= 1000) {
	// $card['id']			=  uniqid('card_');
	$card['last4'] 		=4242;
	$card['brand'] 		='Visa';
	$card['funding'] 	='Debit';
	$card['exp_month'] 	=rand(1,12);
	$card['exp_year'] 	=rand(2015,2020);
	$card['country'] 	='RW';

	//Creating card Object
	$cardObj =new	\Rahasi\Repositories\Eloquents\Card;
	$cardObj->unguard();

	$chargeable = $cardObj->create($card);

	// $chargedata['id']		=  uniqid('ch_');
	$chargedata['livemode']	= false;
	$chargedata['paid']		= true;
	$chargedata['status']	= 'success';
	$chargedata['amount']	= rand(500,1000000);
	$chargedata['currency']	= 'RWF';
	$chargedata['captured']	= false;

	$charge = $chargeable->charge()->create($chargedata);

	$count++;
	}

	$count = 0 ;
	while ($count <= 10) {
	// $customerdata['id']					= uniqid('cus_');
	$customerdata['livemode']			= false;
	$customerdata['description']		= 'Customer with data';
	$customerdata['email']				= 'johndoe@email.com';
	$customerdata['delinquent']			= 'Yes';
	$customerdata['discount']			= 'No discount';
	$customerdata['account_balance']	= 000.00;

	$customer = new \Rahasi\Repositories\Eloquents\Customer;
	$customer->unguard();

	$customerObj =  $customer->create($customerdata);
	$count ++;
	}


	}

}
