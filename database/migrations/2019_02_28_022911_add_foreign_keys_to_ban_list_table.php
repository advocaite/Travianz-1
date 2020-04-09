<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToBanListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ban_list', function(Blueprint $table)
		{
			$table->foreign('admin_user_id', 'FKban_list476020')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('banned_user_id', 'FKban_list994747')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ban_list', function(Blueprint $table)
		{
			$table->dropForeign('FKban_list476020');
			$table->dropForeign('FKban_list994747');
		});
	}

}
