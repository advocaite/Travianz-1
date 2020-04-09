<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceChatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alliance_chat', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('alliance_id')->index('FKalliance_c403419');
			$table->integer('user_id')->index('FKalliance_c21184');
			$table->string('content');
			$table->timestamp('created_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alliance_chat');
	}

}
