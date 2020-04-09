<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPrisonerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prisoner', function(Blueprint $table)
		{
			$table->foreign('to_village_id', 'FKprisoner229526')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('from_village_id', 'FKprisoner943682')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prisoner', function(Blueprint $table)
		{
			$table->dropForeign('FKprisoner229526');
			$table->dropForeign('FKprisoner943682');
		});
	}

}
