<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtefactTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artefact', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('village_id')->index('FKartefact516371');
			$table->boolean('type')->default(0);
			$table->boolean('size')->default(0);
			$table->boolean('active')->default(0);
			$table->timestamp('updated_at')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artefact');
	}

}
