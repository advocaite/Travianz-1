<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToForumSurveyTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('forum_survey', function(Blueprint $table)
		{
			$table->foreign('forum_topic_id', 'FKforum_surv845376')->references('id')->on('forum_topic')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('forum_survey', function(Blueprint $table)
		{
			$table->dropForeign('FKforum_surv845376');
		});
	}

}
