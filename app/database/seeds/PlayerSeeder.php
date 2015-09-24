<?php
class PlayerSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$player = new Player;

		$player->first_name='Amanda';
		$player->last_name='Ortiz';
		$player->email='Manda9291@yahoo.com';
		$player->password='password';
		$player->gender='F';
		$player->city_id='1';
		$player->sports_tags='1,2';
		$player->profile_picture='AmandaO.img';



	}
}
