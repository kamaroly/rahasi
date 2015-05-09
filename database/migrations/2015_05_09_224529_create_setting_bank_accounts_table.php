<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingBankAccountsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting_bank_accounts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('currency');
			$table->string('country');
			$table->string('routing_number');
			$table->string('account_number');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')->on('users')
				  ->onDelete('cascade');

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
		Schema::drop('setting_bank_accounts');
	}

}
