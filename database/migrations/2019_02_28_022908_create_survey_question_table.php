<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyQuestionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('survey_question', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('forum_topic_id')->index('FKsurvey_que626169');
			$table->string('content', 40);
			$table->integer('votes')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('survey_question');
	}

}
