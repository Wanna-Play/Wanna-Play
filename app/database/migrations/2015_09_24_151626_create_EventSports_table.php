<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventSportsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('event_sport', function(Blueprint $table)
		{
		$table->integer('user_id')->unsigned();
		$table->integer('event_id')->unsigned();
	
		$table->primary(['user_id','event_id']);

		$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		$table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Events');
	}

}
