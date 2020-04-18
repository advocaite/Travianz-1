<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceInternalLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alliance_internal_logs', function (Blueprint $table) {
            $table->unsignedBigInteger('alliance_id')->index();
            $table->unsignedBigInteger('alliance_user_log_id')->index();
            $table->primary(['alliance_id','alliance_user_log_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alliance_internal_logs');
    }
}
