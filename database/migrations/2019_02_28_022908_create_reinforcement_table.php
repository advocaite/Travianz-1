<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReinforcementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reinforcement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('from_village_id')->index('FKreinforcem866876');
			$table->integer('to_village_id')->index('FKreinforcem306332');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reinforcement');
	}

}
