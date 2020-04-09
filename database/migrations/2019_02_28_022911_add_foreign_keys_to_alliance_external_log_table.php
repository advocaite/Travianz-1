<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceExternalLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_external_log', function(Blueprint $table)
		{
			$table->foreign('alliance_id', 'FKalliance_e397403')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alliance_diplomacy_log_id', 'FKalliance_e729843')->references('id')->on('alliance_diplomacy_log')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_external_log', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_e397403');
			$table->dropForeign('FKalliance_e729843');
		});
	}

}
