<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToForumAllianceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_alliance', function(Blueprint $table)
		{
			$table->foreign('forum_id', 'FKforum_alli38468')->references('id')->on('forum')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alliance_id', 'FKforum_alli532357')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_alliance', function(Blueprint $table)
		{
			$table->dropForeign('FKforum_alli38468');
			$table->dropForeign('FKforum_alli532357');
		});
	}

}
