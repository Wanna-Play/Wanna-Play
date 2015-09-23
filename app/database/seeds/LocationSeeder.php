<?php
class LocationsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$event = new event;

		$locationE->Name_Of_Location='San Pedro Park';
		$locationE->Address='1415 San Pedro ';
		$locationE->City='San Antonio';
		$locationE->Zip='78212';
		$locationE->Phone='210-732-5992';
		$locationE->Url='sanantonio.gov/parksandrec/directory_san_pedro.aspx';

		$locationE->Name_Of_Location='Woodlawn Lake Park';
		$locationE->Address='1103 Cincinnati Ave ';
		$locationE->City='San Antonio';
		$locationE->Zip='78201';
		$locationE->Phone='210-732-5789';
		$locationE->Url='www.sanantonio.gov/historic/Districts/Woodlawn_Lake.aspx';

	}
}