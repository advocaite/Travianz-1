<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report', function(Blueprint $table)
		{
			$table->integer('id', true);
            $table->integer('from_user_id')->index('FKreport274401');
			$table->integer('from_village_id')->index('FKreport274402');
			$table->integer('to_user_id')->index('FKreport898805');
            $table->integer('to_village_id')->index('FKreport898806');
			$table->smallInteger('type')->default(0);
			$table->boolean('seen')->default(0);
			$table->boolean('archived')->default(0);
			$table->timestamp('created_at')->nullable();
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
		Schema::drop('report');
	}

}
