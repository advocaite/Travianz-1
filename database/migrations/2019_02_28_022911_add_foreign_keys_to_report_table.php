<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('report', function(Blueprint $table)
		{
			$table->foreign('from_user_id', 'FKreport274401')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('from_village_id', 'FKreport274402')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('to_user_id', 'FKreport898805')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('to_village_id', 'FKreport898806')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('report', function(Blueprint $table)
		{
            $table->dropForeign('FKreport274401');
			$table->dropForeign('FKreport274402');
            $table->dropForeign('FKreport898805');
			$table->dropForeign('FKreport898806');
		});
	}

}
