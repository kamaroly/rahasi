<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('customers', function(Blueprint $table)
		{
			$table->string('id');
			$table->boolean('livemode');
			$table->string('description');
			$table->string('email');
			$table->string('delinquent'); //Whether or not the latest charge for the customer’s latest invoice has failed
			$table->string('discount'); //Describes the current discount active on the customer, if there is one.
			$table->decimal('account_balance',10,2); //Current balance, if any, being stored on the customer’s account. If negative, the customer has credit to apply to the next invoice. If positive, the customer has an amount owed that will be added to the next invoice. 
			$table->string('currency');
			$table->string('sources');
			$table->string('default_source');
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
		Schema::drop('customers');
	}

}