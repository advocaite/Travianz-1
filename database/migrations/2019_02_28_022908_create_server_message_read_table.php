<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServerMessageReadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('server_message_read', function(Blueprint $table)
		{
			$table->integer('user_id');
			$table->integer('server_message_id')->index('FKserver_mes625969');
			$table->boolean('read')->default(0);
			$table->primary(['user_id','server_message_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('server_message_read');
	}

}
