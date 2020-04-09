<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceInternalLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_internal_log', function(Blueprint $table)
		{
			$table->foreign('alliance_id', 'FKalliance_i597599')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alliance_user_log_id', 'FKalliance_i646722')->references('id')->on('alliance_user_log')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_internal_log', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_i597599');
			$table->dropForeign('FKalliance_i646722');
		});
	}

}
