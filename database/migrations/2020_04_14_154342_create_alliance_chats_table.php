<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllianceChatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alliance_chats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alliance_id')->index();
            $table->unsignedBigInteger('user_id')->index();
            $table->string('content', 300);
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
        Schema::dropIfExists('alliance_chats');
    }
}
