<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMovementUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('movement_unit_list', function(Blueprint $table)
		{
			$table->foreign('movement_id', 'FKmovement_u961123')->references('id')->on('movement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('movement_unit_list', function(Blueprint $table)
		{
			$table->dropForeign('FKmovement_u961123');
		});
	}

}
