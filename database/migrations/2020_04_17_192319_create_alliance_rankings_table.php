<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceRankingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alliance_rankings', function (Blueprint $table) {
            $table->unsignedBigInteger('alliance_id')->primary();
            $table->unsignedMediumInteger('old_rank')->default(0);
            $table->unsignedMediumInteger('climbed_ranks')->default(0);
            $table->unsignedMediumInteger('climber_points')->default(0);
            $table->unsignedBigInteger('raided_resources')->default(0);
            $table->unsignedBigInteger('attacking_points')->default(0);
            $table->unsignedBigInteger('defending_points')->default(0);
            $table->unsignedBigInteger('total_attacking_points')->default(0);
            $table->unsignedBigInteger('total_defending_points')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alliance_rankings');
    }
}
