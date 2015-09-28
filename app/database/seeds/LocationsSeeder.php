<?php
class LocationsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$location = new Location();

		$location->name_of_location='San Pedro Park';
		$location->address='1415 San Pedro ';
		$location->city='San Antonio';
		$location->state='Texas';
		$location->zip=78212;
		$location->phone='210-732-5992';
		$location->url='sanantonio.gov/parksandrec/directory_san_pedro.aspx';

		$location->save();

		$loc = new Location();

		$loc->name_of_location='Woodlawn Lake Park';
		$loc->address='1103 Cincinnati Ave ';
		$loc->city='San Antonio';
		$loc->state='Texas';
		$loc->zip=78201;
		$loc->phone='210-732-5789';
		$loc->url='www.sanantonio.gov/historic/Districts/Woodlawn_Lake.aspx';

		$loc->save();

	}
}
