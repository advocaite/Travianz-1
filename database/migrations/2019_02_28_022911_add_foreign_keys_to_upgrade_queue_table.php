<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUpgradeQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('upgrade_queue', function(Blueprint $table)
		{
			$table->foreign('upgrade_id', 'FKupgrade_qu251028')->references('id')->on('upgrade')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('upgrade_queue', function(Blueprint $table)
		{
			$table->dropForeign('FKupgrade_qu251028');
		});
	}

}
