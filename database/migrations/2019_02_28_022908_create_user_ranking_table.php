<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRankingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_ranking', function(Blueprint $table)
		{
			$table->integer('user_id', true);
			$table->integer('old_rank')->default(0);
			$table->integer('climbed_ranks')->default(0);
			$table->integer('climber_points')->default(0);
			$table->integer('raided_resources')->default(0);
			$table->integer('attacking_points')->default(0);
			$table->integer('defending_points')->default(0);
			$table->integer('total_attacking_points')->default(0);
			$table->integer('total_defending_points')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_ranking');
	}

}
