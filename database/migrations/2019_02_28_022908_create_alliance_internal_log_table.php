<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceInternalLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_internal_log', function(Blueprint $table)
		{
			$table->integer('alliance_id');
			$table->integer('alliance_user_log_id')->index('FKalliance_i646722');
			$table->primary(['alliance_id','alliance_user_log_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alliance_internal_log');
	}

}
