<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('friend', function(Blueprint $table)
		{
			$table->integer('from_user_id');
			$table->integer('to_user_id')->index('FKfriend698734');
			$table->boolean('accepted')->default(0);
			$table->primary(['from_user_id','to_user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('friend');
	}

}
