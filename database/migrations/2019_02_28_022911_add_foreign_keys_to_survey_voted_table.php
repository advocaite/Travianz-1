<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSurveyVotedTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('survey_voted', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKsurvey_vot351906')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('forum_topic_id', 'FKsurvey_vot733361')->references('forum_topic_id')->on('forum_survey')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('survey_voted', function(Blueprint $table)
		{
			$table->dropForeign('FKsurvey_vot351906');
			$table->dropForeign('FKsurvey_vot733361');
		});
	}

}
