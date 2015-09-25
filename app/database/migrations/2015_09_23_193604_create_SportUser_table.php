<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSportUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sport_user', function(Blueprint $table)
		{
		$table->integer('user_id')->unsigned();
		$table->integer('sport_id')->unsigned();

		$table->primary(['user_id','sport_id']);

		$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		$table->foreign('sport_id')->references('id')->on('sports')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
