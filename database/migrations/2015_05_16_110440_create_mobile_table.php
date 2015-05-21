<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mobiles', function(Blueprint $table)
		{
			$table->string('id');
			$table->string('msisdn');  //Telephone.
			$table->string('brand');  // Tigo,Mtn airtel etc....
			$table->string('country');  // Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you’ve collected.
			$table->string('address_line1')->nullable(); //Billing address country, if provided when creating card
			$table->string('customer_id')->nullable();  //The customer that this card belongs to. This attribute will not be in the card object if the card belongs to a recipient instead.
			$table->integer('user_id')->unsigned();
			$table->timestamps();

			$table->unique('id');
			$table->primary('id');
			$table->foreign('customer_id')->references('id')->on('customers');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('mobiles');
	}

}
