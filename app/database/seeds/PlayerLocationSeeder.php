<?php
class PlayerLocationSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$event = new event;

		$locationP->City='San Antonio';
		$locationP->State='Texas';

		$locationP->City='Austin';
		$locationP->State='Texas';

		$locationP->City='Dallas';
		$locationP->State='Texas';

		$locationP->City='Houston';
		$locationP->State='Texas';

		$locationP->City='Corpus Christi';
		$locationP->State='Texas';

	}
}