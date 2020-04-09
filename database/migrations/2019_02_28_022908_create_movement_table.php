<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovementTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movement', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('from_village_id')->index('FKmovement852586');
			$table->integer('to_village_id')->index('FKmovement54205');
			$table->timestamp('created_at')->nullable();
			$table->timestamp('ended_at')->nullable();
			$table->boolean('type')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movement');
	}

}
