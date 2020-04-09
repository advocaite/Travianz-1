<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDefenderUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('defender_unit_list', function(Blueprint $table)
		{
			$table->foreign('report_id', 'FKdefender_u922602')->references('id')->on('report')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('defender_unit_list', function(Blueprint $table)
		{
			$table->dropForeign('FKdefender_u922602');
		});
	}

}
