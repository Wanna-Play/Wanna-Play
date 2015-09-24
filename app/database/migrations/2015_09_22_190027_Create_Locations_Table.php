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
			
			$table->string('name', 255)->nullable();
			$table->string('address', 255)->nullable();
			$table->string('city', 255);
			$table->char('zip', 5);
			$table->char('phone', 10);
			$table->string('url', 255);

			
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
