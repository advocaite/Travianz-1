<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPrisonerUnitListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('prisoner_unit_list', function(Blueprint $table)
		{
			$table->foreign('prisoner_id', 'FKprisoner_u658208')->references('id')->on('prisoner')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('prisoner_unit_list', function(Blueprint $table)
		{
			$table->dropForeign('FKprisoner_u658208');
		});
	}

}
