<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('locations', function(Blueprint $table)
			{
			$table->increments('id');

			$table->string('name_of_location', 255)->nullable();
			$table->string('address', 255)->nullable();
			$table->string('city', 255);
			$table->string('zip', 255);
			$table->string('phone', 20);
			$table->string('url', 255);


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
		Schema::drop('events');
	}

}
