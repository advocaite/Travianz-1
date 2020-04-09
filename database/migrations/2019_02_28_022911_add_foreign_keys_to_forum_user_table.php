<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToForumUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_user', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKforum_user479930')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('forum_id', 'FKforum_user520807')->references('id')->on('forum')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_user', function(Blueprint $table)
		{
			$table->dropForeign('FKforum_user479930');
			$table->dropForeign('FKforum_user520807');
		});
	}

}
