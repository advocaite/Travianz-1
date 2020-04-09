<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserReferralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_referral', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKuser_refer548073')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('referral_user_id', 'FKuser_refer938221')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('user_referral', function(Blueprint $table)
		{
			$table->dropForeign('FKuser_refer548073');
			$table->dropForeign('FKuser_refer938221');
		});
	}

}
