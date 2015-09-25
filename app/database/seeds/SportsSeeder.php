<?php
class SportsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$sport = new Sport();

		$sport->sport='Football';
		$sport->sport='Soccer';
		$sport->sport='Quidditch';
		$sport->sport='Bocce Ball';
		$sport->sport='Rugby';
		$sport->sport='Disc Golf';


	}
}
