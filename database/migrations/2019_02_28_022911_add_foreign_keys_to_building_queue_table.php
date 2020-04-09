<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBuildingQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('building_queue', function(Blueprint $table)
		{
			$table->foreign('building_id', 'FK_building_queue_building_id')->references('id')->on('building')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('building_queue', function(Blueprint $table)
		{
			$table->dropForeign('FK_building_queue_building_id');
		});
	}

}
