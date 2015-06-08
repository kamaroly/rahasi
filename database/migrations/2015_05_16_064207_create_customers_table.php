<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('customers', function (Blueprint $table) {
			$table->string('id');
			$table->boolean('livemode')->default(false);
			$table->string('description')->nullable();
			$table->string('email')->nullable();
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->unique('id');
			$table->primary('id');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('customers');
	}

}
