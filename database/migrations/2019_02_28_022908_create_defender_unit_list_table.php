<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDefenderUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('defender_unit_list', function(Blueprint $table)
		{
			$table->integer('report_id');
			$table->smallInteger('type');
			$table->boolean('dead')->default(0);
			$table->integer('amount')->default(0);
			$table->primary(['report_id','type','dead']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('defender_unit_list');
	}

}
