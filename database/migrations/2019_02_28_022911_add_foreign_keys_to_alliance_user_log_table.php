<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceUserLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_user_log', function(Blueprint $table)
		{
			$table->foreign('target_user_id', 'FKalliance_u384937')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('creator_user_id', 'FKalliance_u468278')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_user_log', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_u384937');
			$table->dropForeign('FKalliance_u468278');
		});
	}

}
