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
			$table->string("id"); //: "ch_162Ff42eZvKYlo2CDae1HhUI",
			$table->boolean('livemode')->default(false);
			$table->boolean('paid')->default(false);
			$table->string('status')->nullable();
			$table->decimal('amount',10,2)->default(0.00);
			$table->string('currency')->nullable();
			$table->boolean('refounded')->default(false);
			$table->string('chargeable_id')->nullable();
			$table->string('chargeable_type')->nullable();
			$table->boolean('captured')->default(false);
			$table->string('balance_transaction')->nullable();
			$table->string('failure_message')->nullable();
			$table->string('failure_code')->nullable();
			$table->decimal('amount_refunded',10,2)->default(0.00);
			$table->string('customer_id')->nullable();
			$table->string('invoice')->nullable();
			$table->string('description')->nullable();
			$table->string('dispute')->nullable();
			$table->string('statement_descriptor')->nullable();
			$table->string('receipt_email')->nullable();
			$table->string('receipt_number')->nullable();
			$table->decimal('application_fee')->default(0.00);
			$table->timestamps();

			$table->unique('id');
			$table->primary(array('id'));
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
		Schema::drop('charges');
	}

}
