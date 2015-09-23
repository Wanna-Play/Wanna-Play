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

		DB::table('Events')->delete();
		// DB::table('Locations')->delete();
		DB::table('Sports')->delete();
		// DB::table('Players')->delete();

		$this->call('SportsSeeder');
		$this->call('EventsSeeder');
	}

}
