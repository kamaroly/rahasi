<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingGeneralsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting_generals', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('account_name');
			$table->string('contry');
			$table->string('timezone');
			$table->string('name');
			$table->string('website');
			$table->string('statement_description');
			$table->string('support_website');
			$table->string('email');
			$table->string('phone');
			$table->string('address');
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')->onDelete('cascade');
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
		Schema::drop('setting_generals');
	}

}
