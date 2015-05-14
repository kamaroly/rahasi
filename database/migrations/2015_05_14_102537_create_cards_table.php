<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function(Blueprint $table)
		{
			$table->string('id');
			$table->string('last4');  //The last four digits of the card number.
			$table->string('brand');  // Visa, American Express, MasterCard, Discover, JCB, Diners Club,Smart Cash  or Unknown.
			$table->string('funding');// credit, debit, prepaid, or unknown
			$table->integer('exp_month');
			$table->integer('exp_year');
			$table->string('country');  // Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you’ve collected.
			$table->string('name');		//Cardholder name
			$table->string('address_line1'); //Billing address country, if provided when creating card
			$table->integer('cvc_check'); //if a CVC was provided, results of the check: pass, fail, unavailable, or unchecked
			$table->string('customer');  //The customer that this card belongs to. This attribute will not be in the card object if the card belongs to a recipient instead.
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
		Schema::drop('cards');
	}

}
