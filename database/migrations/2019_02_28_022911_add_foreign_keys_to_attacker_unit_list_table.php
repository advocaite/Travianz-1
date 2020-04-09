<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAttackerUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('attacker_unit_list', function(Blueprint $table)
		{
			$table->foreign('report_id', 'FKattacker_u323129')->references('id')->on('report')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('attacker_unit_list', function(Blueprint $table)
		{
			$table->dropForeign('FKattacker_u323129');
		});
	}

}
