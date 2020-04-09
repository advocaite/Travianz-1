<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlliancePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_permission', function(Blueprint $table)
		{
			$table->integer('alliance_id');
			$table->integer('user_id')->index('FK_alliance_permission');
			$table->boolean('type');
			$table->primary(['alliance_id','user_id','type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alliance_permission');
	}

}
