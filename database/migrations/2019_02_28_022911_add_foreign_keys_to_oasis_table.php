<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToOasisTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('oasis', function(Blueprint $table)
		{
			$table->foreign('world_id', 'FKoasis67231')->references('id')->on('world')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('owner_village_id', 'FKoasis90780')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('oasis', function(Blueprint $table)
		{
			$table->dropForeign('FKoasis67231');
			$table->dropForeign('FKoasis90780');
		});
	}

}
