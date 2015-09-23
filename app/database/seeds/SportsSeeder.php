<?php
class SportsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$sport = new Sport;
		$sport->Sport='Football';
		$sport->Sport='Soccer';
		$sport->Sport='Quidditch';
		$sport->Sport='Bocce Ball';
		$sport->Sport='Rugby';
		$sport->Sport='Disc Golf';


	}
}