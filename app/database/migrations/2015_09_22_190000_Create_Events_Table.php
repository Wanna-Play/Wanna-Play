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
		Schema::create('Events', function(Blueprint $table)
			{
			$table->increments('id');
			
			$table->string('event_name', 255)->nullable();
			$table->string('Location_ID', 255)->nullable();
			$table->string('Sport', 255)->unique();
			$table->string('Gender', 255);
			$table->string('Skill_Level', 255);
			$table->decimal('amount', 5, 2);
			$table->string('Organizer', 255);
			
			
			$table->softDeletes();
			$table->rememberToken();
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
		Schema::drop('Events');

	}

}
