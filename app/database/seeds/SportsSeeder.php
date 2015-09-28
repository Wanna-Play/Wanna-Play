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
		$sport->save();

		$sport = new Sport();
		$sport->sport='Soccer';
		$sport->save();

		$sport = new Sport();
		$sport->sport='Quidditch';
		$sport->save();

		$sport = new Sport();
		$sport->sport='Bocce Ball';
		$sport->save();

		$sport = new Sport();
		$sport->sport='Rugby';
		$sport->save();

		$sport = new Sport();
		$sport->sport='Disc Golf';
		$sport->save();

	}
}
