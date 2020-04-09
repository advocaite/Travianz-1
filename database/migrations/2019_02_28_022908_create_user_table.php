<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 20)->unique('name');
			$table->char('password', 60);
			$table->string('email', 100)->unique('email');
			$table->timestamp('email_verified_at')->nullable();
			$table->boolean('tribe')->default(1);
			$table->boolean('map_sector')->default(0);
			$table->boolean('type')->default(0);
			$table->integer('gold')->default(0);
			$table->integer('maximum_evasion')->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
