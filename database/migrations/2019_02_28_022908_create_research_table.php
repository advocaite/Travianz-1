<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('research', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('village_id')->index('FKresearch114130');
			$table->smallInteger('type')->default(0);
			$table->boolean('researched')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('research');
	}

}
