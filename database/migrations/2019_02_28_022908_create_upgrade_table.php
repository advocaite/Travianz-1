<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpgradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('upgrade', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('village_id')->index('FKupgrade838410');
			$table->smallInteger('type');
			$table->boolean('kind')->default(0);
			$table->boolean('level')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('upgrade');
	}

}
