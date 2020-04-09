<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToVillageSelectedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('village_selected', function(Blueprint $table)
		{
			$table->foreign('village_id', 'FKvillage_se23399')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FKvillage_se407599')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('village_selected', function(Blueprint $table)
		{
			$table->dropForeign('FKvillage_se23399');
			$table->dropForeign('FKvillage_se407599');
		});
	}

}
