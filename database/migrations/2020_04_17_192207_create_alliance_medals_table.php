<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceMedalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alliance_medals', function (Blueprint $table) {
            $table->unsignedBigInteger('alliance_id')->index();
            $table->unsignedTinyInteger('position')->default(0);
            $table->unsignedSmallInteger('category')->default(0)->index();
            $table->unsignedSmallInteger('week')->default(0)->index();
            $table->unsignedSmallInteger('type')->default(0)->index();
            $table->unsignedBigInteger('points')->default(0);
            $table->softDeletes();
            $table->primary(['alliance_id', 'category', 'week', 'type']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alliance_medals');
    }
}
