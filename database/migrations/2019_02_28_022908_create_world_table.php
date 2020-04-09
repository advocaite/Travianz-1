<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorldTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->smallInteger('x')->default(0);
			$table->smallInteger('y')->default(0);
			$table->smallInteger('type')->default(0);
			$table->boolean('occupied')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world');
	}

}
