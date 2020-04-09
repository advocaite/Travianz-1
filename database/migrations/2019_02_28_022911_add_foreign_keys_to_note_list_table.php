<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToNoteListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('note_list', function(Blueprint $table)
		{
			$table->foreign('user_id', 'FKnote_list207589')->references('id')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('note_id', 'FKnote_list615901')->references('id')->on('note')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('note_list', function(Blueprint $table)
		{
			$table->dropForeign('FKnote_list207589');
			$table->dropForeign('FKnote_list615901');
		});
	}

}
