<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('log', function(Blueprint $table)
		{
			$table->foreign('village_id', 'FKlog117530')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FKlog423062')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('log', function(Blueprint $table)
		{
			$table->dropForeign('FKlog117530');
			$table->dropForeign('FKlog423062');
		});
	}

}
