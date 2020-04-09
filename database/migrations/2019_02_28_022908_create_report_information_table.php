<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportInformationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('report_information', function(Blueprint $table)
		{
			$table->integer('id');
			$table->integer('report_id')->index('FKreport_inf942832');
			$table->float('previous_value', 10, 0)->default(0);
			$table->float('next_value', 10, 0)->default(0);
			$table->boolean('type')->default(0);
			$table->primary(['id','report_id']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('report_information');
	}

}
