<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movement_unit_list', function(Blueprint $table)
		{
			$table->integer('movement_id');
			$table->smallInteger('type');
			$table->integer('amount')->default(0);
			$table->primary(['movement_id','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movement_unit_list');
	}

}
