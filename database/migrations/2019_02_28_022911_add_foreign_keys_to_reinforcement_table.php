<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToReinforcementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reinforcement', function(Blueprint $table)
		{
			$table->foreign('to_village_id', 'FKreinforcem306332')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('from_village_id', 'FKreinforcem866876')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reinforcement', function(Blueprint $table)
		{
			$table->dropForeign('FKreinforcem306332');
			$table->dropForeign('FKreinforcem866876');
		});
	}

}
