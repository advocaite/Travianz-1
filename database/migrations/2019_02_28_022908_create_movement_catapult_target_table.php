<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementCatapultTargetTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movement_catapult_target', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('movement_id')->index('FKmovement_c254958');
			$table->smallInteger('building_target')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movement_catapult_target');
	}

}
