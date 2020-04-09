<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorldResourceTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('world_resource', function(Blueprint $table)
		{
			$table->integer('world_id');
			$table->integer('type')->default(0);
			$table->float('value', 10, 0)->default(750);
			$table->timestamp('updated_at')->nullable();
			$table->primary(['world_id', 'type']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('world_resource');
	}

}
