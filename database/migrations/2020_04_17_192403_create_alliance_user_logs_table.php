<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceUserLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alliance_user_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_user_id')->index();
            $table->unsignedBigInteger('target_user_id')->index();
            $table->unsignedTinyInteger('type')->default(0);
            $table->timestamp('created_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alliance_user_logs');
    }
}
