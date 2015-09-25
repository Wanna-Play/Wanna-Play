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
		DB::table('locations')->delete();
		DB::table('sports')->delete();
		DB::table('users')->delete();

		$this->call('PlayerSeeder');
		$this->call('LocationsSeeder');
		$this->call('SportsSeeder');
		$this->call('EventsSeeder');

	}

}
