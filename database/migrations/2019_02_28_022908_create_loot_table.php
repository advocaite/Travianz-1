<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLootTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loot', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('wood')->default(0);
			$table->integer('clay')->default(0);
			$table->integer('iron')->default(0);
			$table->integer('crop')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loot');
	}

}
