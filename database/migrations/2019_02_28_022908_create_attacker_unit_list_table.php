<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttackerUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attacker_unit_list', function(Blueprint $table)
		{
			$table->integer('report_id');
			$table->smallInteger('type');
			$table->boolean('dead');
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
		Schema::drop('attacker_unit_list');
	}

}
