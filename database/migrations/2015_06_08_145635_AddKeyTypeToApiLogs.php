<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddKeyTypeToApiLogs extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table('api_logs', function (Blueprint $table) {
			$table->string('keyType');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('api_logs', function (Blueprint $table) {
			$table->dropColumn(['keyType']);
		});
	}

}
