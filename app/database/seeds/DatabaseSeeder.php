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
		DB::table('Locations')->delete();
		DB::table('Sports')->delete();
		DB::table('PlayerLocations')->delete();
		DB::table('Players')->delete();

		$this->call('PlayerSeeder');
		$this->call('LocationSeeder');
		$this->call('PlayerLocationSeeder');
		$this->call('SportsSeeder');
		$this->call('EventsSeeder');

	}

}
