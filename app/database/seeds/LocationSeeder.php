<?php
class LocationsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$event = new event;

		$locationE->name_of_location='San Pedro Park';
		$locationE->address='1415 San Pedro ';
		$locationE->city='San Antonio';
		$locationE->zip='78212';
		$locationE->phone='210-732-5992';
		$locationE->url='sanantonio.gov/parksandrec/directory_san_pedro.aspx';

		$locationE->name_of_location='Woodlawn Lake Park';
		$locationE->address='1103 Cincinnati Ave ';
		$locationE->city='San Antonio';
		$locationE->zip='78201';
		$locationE->phone='210-732-5789';
		$locationE->url='www.sanantonio.gov/historic/Districts/Woodlawn_Lake.aspx';

	}
}