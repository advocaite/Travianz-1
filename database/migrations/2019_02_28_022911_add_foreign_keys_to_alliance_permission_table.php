<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToAlliancePermissionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alliance_permission', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FK_alliance_permission')->references('id')->on('user')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('alliance_id', 'FKalliance_p240052')->references('id')->on('alliance')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alliance_permission', function(Blueprint $table)
		{
			$table->dropForeign('FK_alliance_permission');
			$table->dropForeign('FKalliance_p240052');
		});
	}

}
