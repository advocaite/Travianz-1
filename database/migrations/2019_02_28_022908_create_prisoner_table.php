<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrisonerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prisoner', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('from_village_id')->default(0)->index('FKprisoner943682');
			$table->integer('to_village_id')->default(0)->index('FKprisoner229526');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('prisoner');
	}

}
