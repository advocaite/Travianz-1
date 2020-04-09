<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToForumTopicReadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_topic_read', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKforum_topi306203')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('forum_topic_id', 'FKforum_topi931448')->references('id')->on('forum_topic')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_topic_read', function(Blueprint $table)
		{
			$table->dropForeign('FKforum_topi306203');
			$table->dropForeign('FKforum_topi931448');
		});
	}

}
