<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMovementLootTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('movement_loot', function(Blueprint $table)
		{
			$table->foreign('loot_id', 'FKmovement_l13718')->references('id')->on('loot')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('movement_id', 'FKmovement_l830528')->references('id')->on('movement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('movement_loot', function(Blueprint $table)
		{
			$table->dropForeign('FKmovement_l13718');
			$table->dropForeign('FKmovement_l830528');
		});
	}

}
