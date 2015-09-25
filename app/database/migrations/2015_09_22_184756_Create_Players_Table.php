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
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('first_name', 255)->nullable();
			$table->string('last_name', 255)->nullable();
			$table->string('username', 255)->unique();
			$table->string('email', 255)->unique();
			$table->string('password', 255);
			$table->enum('gender', ['M', 'F']);
			$table->string('city', 255);

			$table->string('profile_picture', 255)->nullable();

			$table->softDeletes();
			$table->rememberToken();
			$table->timestamps();

			// $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
