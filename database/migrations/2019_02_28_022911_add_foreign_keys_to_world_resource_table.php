<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToWorldResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('world_resource', function(Blueprint $table)
		{
			$table->foreign('world_id', 'FKworld_reso904588')->references('id')->on('world')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('world_resource', function(Blueprint $table)
		{
			$table->dropForeign('FKworld_reso904588');
		});
	}

}
