<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToServerMessageReadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('server_message_read', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKserver_mes494851')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('server_message_id', 'FKserver_mes625969')->references('id')->on('server_message')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('server_message_read', function(Blueprint $table)
		{
			$table->dropForeign('FKserver_mes494851');
			$table->dropForeign('FKserver_mes625969');
		});
	}

}
