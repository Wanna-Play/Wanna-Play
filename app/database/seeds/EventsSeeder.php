<?php
class EventsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$event = new event;

		$event->event_name='Soccer Game';
		$event->location_ID='San Pedro Park';
		$event->sport='Soccer';
		$event->gender='Co-Ed';
		$event->skill_level='Intermediate';
		$event->amount='$2.00';
		$event->organizer_id=1;
		$event->description='testing 123';
		


	}
}