<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToMerchantTradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('merchant_trade', function(Blueprint $table)
		{
			$table->foreign('movement_id', 'FKmerchant_t742960')->references('id')->on('movement')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('merchant_trade', function(Blueprint $table)
		{
			$table->dropForeign('FKmerchant_t742960');
		});
	}

}
