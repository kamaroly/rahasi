<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChargesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('charges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("charge_id")->u; //: "ch_162Ff42eZvKYlo2CDae1HhUI",
			$table->boolean('livemode');
			$table->boolean('paid');
			$table->string('status');
			$table->decimal('amount',10,2);
			$table->currency('currency');
			$table->boolean('refounded');
			$table->string('source');
			$table->boolean('captured');
			$table->string('balance_transaction');
			$table->string('failure_message');
			$table->string('failure_code');
			$table->decimal('amount_refunded',10,2);
			$table->string('customer');
			$table->string('invoice');
			$table->string('description');
			$table->string('dispute');
			$table->string('statement_descriptor');
			$table->string('receipt_email');
			$table->string('receipt_number');
			$table->decimal('application_fee');
	
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('charges');
	}

}
