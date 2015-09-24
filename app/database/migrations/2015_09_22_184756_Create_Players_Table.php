<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Players', function(Blueprint $table)
			{
			$table->increments('id');

			$table->string('first_name', 255)->nullable();
			$table->string('last_name', 255)->nullable();
			$table->string('username', 255)->unique();
			$table->string('email', 255)->unique();
			$table->string('password', 255);
			$table->string('gender', 255);
			$table->string('city', 255);
			$table->string('sports', 255);
			$table->string('profile_picture', 255);

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
		Schema::drop('Players');
	}

}
