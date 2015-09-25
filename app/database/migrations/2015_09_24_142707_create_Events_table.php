<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('event_name', 255)->nullable();
			$table->integer('location_id')->unsinged();
			$table->integer('sport_id')->unsigned();
			$table->enum('gender', ['M', 'F'])->nullable();
			$table->string('skill_level', 255);
			$table->decimal('amount', 5, 2);
			$table->string('description', 1500);

			$table->integer('user_id')->unsigned();

			$table->softDeletes();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			// $table->foreign('location_id')->references('id')->on('locations');
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
