<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaypalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paypals', function (Blueprint $table) {
            $table->id();
            $table->string('txn_id');
            $table->string('txn_type');
            $table->string('item_name');
            $table->unsignedBigInteger('item_number');
            $table->unsignedBigInteger('quantity');
            $table->string('payment_status');
            $table->string('payment_amount');
            $table->string('payment_currency');
            $table->string('payer_email');
            $table->string('payment_type');
            $table->string('custom');
            $table->string('invoice');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address_name');
            $table->string('address_country');
            $table->string('address_country_code');
            $table->string('address_zip');
            $table->string('address_state');
            $table->string('address_city');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paypals');
    }
}
