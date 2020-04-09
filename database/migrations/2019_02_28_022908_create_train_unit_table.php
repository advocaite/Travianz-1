<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('train_unit', function(Blueprint $table)
		{
			$table->integer('train_id')->primary();
			$table->smallInteger('type')->default(0);
			$table->integer('quantity')->default(0);
			$table->integer('training_time')->default(0);
			$table->boolean('great')->default(0);
			$table->timestamp('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('train_unit');
	}

}
