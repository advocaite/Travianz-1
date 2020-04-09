<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHeroStatisticTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hero_statistic', function(Blueprint $table)
		{
			$table->foreign('hero_id', 'FKhero_stati325637')->references('id')->on('hero')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hero_statistic', function(Blueprint $table)
		{
			$table->dropForeign('FKhero_stati325637');
		});
	}

}
