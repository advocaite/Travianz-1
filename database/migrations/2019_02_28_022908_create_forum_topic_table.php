<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForumTopicTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forum_topic', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('forum_id')->index('FKforum_topi790364');
			$table->integer('user_id')->index('FKforum_topi492806');
			$table->string('title', 30);
			$table->text('content', 65535);
			$table->boolean('closed')->default(0);
			$table->boolean('sticked')->default(0);
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
		Schema::drop('forum_topic');
	}

}
