<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVillageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('village', function(Blueprint $table)
		{
			$table->integer('world_id')->primary();
			$table->integer('user_id')->index('FKvillage135167');
			$table->string('name');
			$table->boolean('capital')->default(0);
			$table->integer('population')->default(2);
			$table->integer('culture_points_production')->default(2);
			$table->boolean('evasion')->default(0);
			$table->timestamp('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('village');
	}

}
