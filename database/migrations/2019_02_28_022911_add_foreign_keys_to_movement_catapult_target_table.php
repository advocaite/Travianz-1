<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMovementCatapultTargetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('movement_catapult_target', function(Blueprint $table)
		{
			$table->foreign('movement_id', 'FKmovement_c254958')->references('id')->on('movement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('movement_catapult_target', function(Blueprint $table)
		{
			$table->dropForeign('FKmovement_c254958');
		});
	}

}
