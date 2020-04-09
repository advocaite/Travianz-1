<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('message', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sender_user_id')->index('FKmessage719024');
			$table->integer('recipient_user_id')->index('FKmessage982633');
			$table->char('topic');
			$table->text('content');
			$table->boolean('read')->default(0);
			$table->boolean('archived')->default(0);
			$table->timestamp('created_at')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('message');
	}

}
