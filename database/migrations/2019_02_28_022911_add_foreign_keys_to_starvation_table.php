<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToStarvationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('starvation', function(Blueprint $table)
		{
			$table->foreign('village_id', 'FKstarvation31363')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('starvation', function(Blueprint $table)
		{
			$table->dropForeign('FKstarvation31363');
		});
	}

}
