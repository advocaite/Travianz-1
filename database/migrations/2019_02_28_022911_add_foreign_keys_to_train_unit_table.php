<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTrainUnitTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('train_unit', function(Blueprint $table)
		{
			$table->foreign('train_id', 'FKtrain_unit322888')->references('id')->on('train')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('train_unit', function(Blueprint $table)
		{
			$table->dropForeign('FKtrain_unit322888');
		});
	}

}
