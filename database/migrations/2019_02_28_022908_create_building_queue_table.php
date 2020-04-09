<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('building_queue', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('building_id')->index('FK_building_queue_building_id');
			$table->tinyInteger('sort')->index('sort');
			$table->timestamp('ended_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('building_queue');
	}

}
