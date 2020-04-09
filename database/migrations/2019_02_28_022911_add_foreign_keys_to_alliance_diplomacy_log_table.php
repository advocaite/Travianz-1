<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceDiplomacyLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_diplomacy_log', function(Blueprint $table)
		{
			$table->foreign('alliance_id', 'FKalliance_d39733')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('creator_user_id', 'FKalliance_d86419')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_diplomacy_log', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_d39733');
			$table->dropForeign('FKalliance_d86419');
		});
	}

}
