<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceDiplomacyLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_diplomacy_log', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('creator_user_id')->index('FKalliance_d86419');
			$table->integer('alliance_id')->index('FKalliance_d39733');
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
		Schema::drop('alliance_diplomacy_log');
	}

}
