<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToSitterTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('sitter', function(Blueprint $table)
		{
			$table->foreign('from_user_id', 'FKsitter41590')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('to_user_id', 'FKsitter908223')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('sitter', function(Blueprint $table)
		{
			$table->dropForeign('FKsitter41590');
			$table->dropForeign('FKsitter908223');
		});
	}

}
