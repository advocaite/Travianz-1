<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToResearchQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('research_queue', function(Blueprint $table)
		{
			$table->foreign('research_id', 'FKresearch_q568487')->references('id')->on('research')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('research_queue', function(Blueprint $table)
		{
			$table->dropForeign('FKresearch_q568487');
		});
	}

}
