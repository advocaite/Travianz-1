<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceRankingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_ranking', function(Blueprint $table)
		{
			$table->foreign('alliance_id', 'FKalliance_r685678')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_ranking', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_r685678');
		});
	}

}
