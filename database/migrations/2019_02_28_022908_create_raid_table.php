<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('raid', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('farm_list_id')->index('FKraid125392');
			$table->integer('from_village_id')->default(0)->index('FKraid681956');
			$table->integer('to_village_id')->default(0)->index('FKraid116425');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('raid');
	}

}
