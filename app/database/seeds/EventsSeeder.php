<?php
class EventsSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){
		$location = Location::firstOrFail();
		$user = User::firstOrFail();


		$event = new GameEvent();
		$event->start_time='2015-10-01 2:00 pm';
		$event->event_name='Soccer Game';
		$event->location_id=$location->id;
		$event->gender='Co-Ed';
		$event->skill_level='Intermediate';
		$event->amount=2.00;
		$event->organizer_id=$user->id;
		$event->description='testing 123';
		$event->save();



	}
}
