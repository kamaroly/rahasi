<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCardsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cards', function (Blueprint $table) {
			$table->string('id');
			$table->string('last4'); //The last four digits of the card number.
			$table->string('brand'); // Visa, American Express, MasterCard, Discover, JCB, Diners Club,Smart Cash  or Unknown.
			$table->string('funding'); // credit, debit, prepaid, or unknown
			$table->integer('exp_month');
			$table->integer('exp_year');
			$table->string('country'); // Two-letter ISO code representing the country of the card. You could use this attribute to get a sense of the international breakdown of cards you’ve collected.
			$table->string('city')->nullable();
			$table->string('owner_name')->nullable(); //Cardholder name
			$table->string('address')->nullable(); //Billing address country, if provided when creating card
			$table->integer('cvc_check')->nullable(); //if a CVC was provided, results of the check: pass, fail, unavailable, or unchecked
			$table->string('customer_id')->nullable(); //The customer that this card belongs to. This attribute will not be in the card object if the card belongs to a recipient instead.
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
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
	public function down() {
		Schema::drop('cards');
	}

}
