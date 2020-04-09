<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ban_list', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('banned_user_id')->index('FKban_list994747');
			$table->integer('admin_user_id')->index('FKban_list476020');
			$table->char('reason');
			$table->timestamp('created_at')->nullable();
			$table->timestamp('ended_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ban_list');
	}

}
