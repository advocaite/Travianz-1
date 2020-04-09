<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('hero', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->index('FKhero331421');
			$table->integer('village_id')->default(0);
			$table->smallInteger('type')->default(0);
			$table->string('name');
			$table->timestamp('updated_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('hero');
	}

}
