<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToArtefactsChronologyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('artefacts_chronology', function(Blueprint $table)
		{
			$table->foreign('artefact_id', 'FKartefacts_631181')->references('id')->on('artefact')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('village_id', 'FKartefacts_631182')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('artefacts_chronology', function(Blueprint $table)
		{
			$table->dropForeign('FKartefacts_631181');
			$table->dropForeign('FKartefacts_631182');
		});
	}

}
