<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFoolArtefactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fool_artefact', function(Blueprint $table)
		{
			$table->foreign('id', 'FKfool_artef725518')->references('id')->on('artefact')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fool_artefact', function(Blueprint $table)
		{
			$table->dropForeign('FKfool_artef725518');
		});
	}

}
