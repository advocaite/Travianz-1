<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceChatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_chat', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKalliance_c21184')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('alliance_id', 'FKalliance_c403419')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_chat', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_c21184');
			$table->dropForeign('FKalliance_c403419');
		});
	}

}
