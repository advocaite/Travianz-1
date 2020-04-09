<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReinforcementUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reinforcement_unit_list', function(Blueprint $table)
		{
			$table->integer('reinforcement_id');
			$table->smallInteger('type');
			$table->integer('amount')->default(0);
			$table->primary(['reinforcement_id','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reinforcement_unit_list');
	}

}
