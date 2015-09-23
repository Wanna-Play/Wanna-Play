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
		Schema::create('Locations', function(Blueprint $table)
			{
			$table->increments('id');
			
			$table->string('Name_of_Location', 255)->nullable();
			$table->string('Address', 255)->nullable();
			$table->string('City', 255)->unique();
			$table->string('Zip', 255);
			$table->string('Phone', 20);
			$table->string('URL', 255);

			
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
