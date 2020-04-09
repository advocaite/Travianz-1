<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReportSpyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('report_spy', function(Blueprint $table)
		{
			$table->foreign('report_id', 'FKreport_spy861769')->references('id')->on('report')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('building_id', 'FKreport_spy89102')->references('id')->on('building')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('report_spy', function(Blueprint $table)
		{
			$table->dropForeign('FKreport_spy861769');
			$table->dropForeign('FKreport_spy89102');
		});
	}

}
