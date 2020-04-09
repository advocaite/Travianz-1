<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroStatisticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hero_statistic', function(Blueprint $table)
		{
			$table->integer('hero_id')->primary();
			$table->smallInteger('level')->default(0);
			$table->integer('experience');
			$table->smallInteger('points');
			$table->float('health', 10, 0)->default(0);
			$table->smallInteger('attacking_points');
			$table->smallInteger('defending_points');
			$table->smallInteger('attacking_bonus_points');
			$table->smallInteger('defending_bonus_points')->default(0);
			$table->smallInteger('regeneration_points')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hero_statistic');
	}

}
