<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('events')->delete();
		// DB::table('Locations')->delete();
		DB::table('sports')->delete();
		// DB::table('Players')->delete();

		$this->call('sportsSeeder');
		$this->call('eventsSeeder');
	}

}
