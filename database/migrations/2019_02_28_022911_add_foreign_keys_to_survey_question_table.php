<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSurveyQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('survey_question', function(Blueprint $table)
		{
			$table->foreign('forum_topic_id', 'FKsurvey_que626169')->references('forum_topic_id')->on('forum_survey')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('survey_question', function(Blueprint $table)
		{
			$table->dropForeign('FKsurvey_que626169');
		});
	}

}
