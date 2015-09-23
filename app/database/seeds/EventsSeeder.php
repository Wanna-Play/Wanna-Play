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
		$event->Location_ID='San Pedro Park';
		$event->Sport='Soccer';
		$event->Gender='Co-Ed';
		$event->Skill_level='Intermediate';
		$event->Amount='$2.00 to get into the park';
		$event->Organizer_ID=1;
		$event->Description='testing 123';
		


	}
}