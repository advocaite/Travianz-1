<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAllianceMemberTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_member', function(Blueprint $table)
		{
			$table->foreign('alliance_id', 'FKalliance_m115884')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('user_id', 'FKalliance_m662871')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_member', function(Blueprint $table)
		{
			$table->dropForeign('FKalliance_m115884');
			$table->dropForeign('FKalliance_m662871');
		});
	}

}
