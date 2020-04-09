<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceDiplomacyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_diplomacy', function(Blueprint $table)
		{
			$table->foreign('to_alliance_id', 'FKalliance_d106816')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('from_alliance_id', 'FKalliance_d830848')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_diplomacy', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_d106816');
			$table->dropForeign('FKalliance_d830848');
		});
	}

}
