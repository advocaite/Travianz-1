<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarketTradeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('market_trade', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('from_village_id')->index('FKmarket_tra665293');
			$table->boolean('offered_resource')->default(0);
			$table->integer('offered_amount')->default(0);
			$table->boolean('wanted_resource')->default(0);
			$table->integer('wanted_amount')->default(0);
			$table->boolean('max_hours')->default(0);
			$table->boolean('alliance_only')->default(0);
			$table->boolean('occupied_merchants')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('market_trade');
	}

}
