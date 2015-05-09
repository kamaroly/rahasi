<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingApiKeysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('setting_api_keys', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('test_secret_key');
			$table->string('test_publishable_key');
			$table->string('live_secret_key');
			$table->string('live_publishable_key');
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
		Schema::drop('setting_api_keys');
	}

}
