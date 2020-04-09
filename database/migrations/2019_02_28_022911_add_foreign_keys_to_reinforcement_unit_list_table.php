<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReinforcementUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reinforcement_unit_list', function(Blueprint $table)
		{
			$table->foreign('reinforcement_id', 'FKreinforcem132243')->references('id')->on('reinforcement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reinforcement_unit_list', function(Blueprint $table)
		{
			$table->dropForeign('FKreinforcem132243');
		});
	}

}
