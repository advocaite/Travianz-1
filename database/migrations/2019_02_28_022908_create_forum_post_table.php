<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumPostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_post', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('forum_topic_id')->index('FKforum_post605358');
			$table->integer('user_id')->default(0)->index('FKforum_post956341');
			$table->text('content', 65535);
			$table->timestamp('created_at')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forum_post');
	}

}
