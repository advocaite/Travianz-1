<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeRouteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trade_route', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('loot_id')->index('FKtrade_rout271581');
			$table->integer('from_village_id')->index('FKtrade_rout147201');
			$table->integer('to_village_id')->index('FKtrade_rout26008');
			$table->time('start_time');
			$table->boolean('deliveries_number')->default(0);
			$table->timestamp('updated_at')->nullable();
			$table->timestamp('ended_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('trade_route');
	}

}
