<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceExternalLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_external_log', function(Blueprint $table)
		{
			$table->integer('alliance_id');
			$table->integer('alliance_diplomacy_log_id')->index('FKalliance_e729843');
			$table->primary(['alliance_id','alliance_diplomacy_log_id'], 'PRYMARY');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alliance_external_log');
	}

}
