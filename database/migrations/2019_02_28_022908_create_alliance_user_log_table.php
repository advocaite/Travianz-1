<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceUserLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_user_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('creator_user_id')->index('FKalliance_u468278');
			$table->integer('target_user_id')->index('FKalliance_u384937');
			$table->boolean('type')->default(0);
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
		Schema::drop('alliance_user_log');
	}

}
