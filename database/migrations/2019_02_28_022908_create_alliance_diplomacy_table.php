<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceDiplomacyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_diplomacy', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('from_alliance_id')->index('FKalliance_d830848');
			$table->integer('to_alliance_id')->index('FKalliance_d106816');
			$table->integer('type');
			$table->boolean('accepted')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alliance_diplomacy');
	}

}
