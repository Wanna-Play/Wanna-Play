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
		$location->zip='78212';
		$location->phone='210-732-5992';
		$location->url='sanantonio.gov/parksandrec/directory_san_pedro.aspx';

		$location->name_of_location='Woodlawn Lake Park';
		$location->address='1103 Cincinnati Ave ';
		$location->city='San Antonio';
		$location->zip='78201';
		$location->phone='210-732-5789';
		$location->url='www.sanantonio.gov/historic/Districts/Woodlawn_Lake.aspx';

	}
}
