<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserReferralTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_referral', function(Blueprint $table)
		{
			$table->integer('user_id');
			$table->integer('referral_user_id')->index('FKuser_refer938221');
			$table->softDeletes();
			$table->primary(['user_id','referral_user_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_referral');
	}

}
