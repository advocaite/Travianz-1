<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTradeRouteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('trade_route', function(Blueprint $table)
		{
			$table->foreign('from_village_id', 'FKtrade_rout147201')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('to_village_id', 'FKtrade_rout26008')->references('world_id')->on('village')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('loot_id', 'FKtrade_rout271581')->references('id')->on('loot')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('trade_route', function(Blueprint $table)
		{
			$table->dropForeign('FKtrade_rout147201');
			$table->dropForeign('FKtrade_rout26008');
			$table->dropForeign('FKtrade_rout271581');
		});
	}

}
