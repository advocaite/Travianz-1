<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToForumTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_topic', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKforum_topi492806')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('forum_id', 'FKforum_topi790364')->references('id')->on('forum')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_topic', function(Blueprint $table)
		{
			$table->dropForeign('FKforum_topi492806');
			$table->dropForeign('FKforum_topi790364');
		});
	}

}
