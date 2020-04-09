<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToHeroGenerationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('hero_generation', function(Blueprint $table)
		{
			$table->foreign('hero_id', 'FKhero_gener560915')->references('id')->on('hero')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('hero_generation', function(Blueprint $table)
		{
			$table->dropForeign('FKhero_gener560915');
		});
	}

}
