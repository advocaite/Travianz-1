<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceDiplomaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alliance_diplomacies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('creator_user_id')->index();
            $table->unsignedBigInteger('from_alliance_id')->index();
            $table->unsignedBigInteger('to_alliance_id')->index();
            $table->unsignedSmallInteger('type')->default(0);
            $table->boolean('accepted')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alliance_diplomacies');
    }
}
