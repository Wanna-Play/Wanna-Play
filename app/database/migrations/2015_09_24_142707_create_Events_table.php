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
			$table->string('start_time')->required();
			$table->string('end_time')->nullable();
			$table->integer('organizer_id')->unsigned();
			$table->foreign('organizer_id')->references('id')->on('users')->onDelete('cascade');
			$table->enum('gender', ['M', 'F', 'Co-Ed'])->nullable();
			$table->integer('location_id')->unsigned();
			$table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
			$table->string('skill_level', 255);
			$table->decimal('amount', 5, 2);
			$table->string('description', 1500);
			$table->string('event_image', 255)->nullable();


			$table->softDeletes();
			$table->timestamps();
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
