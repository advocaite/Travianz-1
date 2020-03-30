<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('language_id')->default(1);
            $table->string('name');
            $table->integer('player_limit')->default(5000);
            $table->dateTime('start_at');
            $table->boolean('locked')->default(0);
            $table->boolean('state')->default(0);
            $table->tinyInteger('ord')->default(1);
            $table->timestamps();

            //TODO: make pivot for user and servers  -  one user can attach to many servers
            $table->index('language_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servers');
    }
}
