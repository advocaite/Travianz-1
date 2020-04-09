<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReportLootTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('report_loot', function(Blueprint $table)
		{
			$table->foreign('loot_id', 'FKreport_loo588434')->references('id')->on('loot')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('report_id', 'FKreport_loo638294')->references('id')->on('report')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('report_loot', function(Blueprint $table)
		{
			$table->dropForeign('FKreport_loo588434');
			$table->dropForeign('FKreport_loo638294');
		});
	}

}
