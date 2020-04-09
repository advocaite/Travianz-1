<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumAllianceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_alliance', function(Blueprint $table)
		{
			$table->integer('forum_id');
			$table->integer('alliance_id')->index('FKforum_alli532357');
			$table->primary(['forum_id','alliance_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forum_alliance');
	}

}
