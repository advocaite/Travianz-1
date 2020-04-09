<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisonerUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prisoner_unit_list', function(Blueprint $table)
		{
			$table->integer('prisoner_id');
			$table->smallInteger('type');
			$table->integer('amount')->default(0);
			$table->primary(['prisoner_id','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prisoner_unit_list');
	}

}
