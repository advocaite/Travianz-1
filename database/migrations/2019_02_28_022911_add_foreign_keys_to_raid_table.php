<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRaidTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('raid', function(Blueprint $table)
		{
			$table->foreign('to_village_id', 'FKraid116425')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('farm_list_id', 'FKraid125392')->references('id')->on('farm_list')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('from_village_id', 'FKraid681956')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('raid', function(Blueprint $table)
		{
			$table->dropForeign('FKraid116425');
			$table->dropForeign('FKraid125392');
			$table->dropForeign('FKraid681956');
		});
	}

}
