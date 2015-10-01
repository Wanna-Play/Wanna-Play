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
		$sport = Sport::all();

		$event = new GameEvent();


		$event->sport_id=$sport->random()->id;
		$event->event_name='Soccer Game';
		$event->start_time='2015-10-01 12:00 pm';
		$event->location_id=$location->id;
		$event->gender='Co-Ed';
		$event->skill_level='Intermediate';
		$event->amount=2.00;
		$event->organizer_id=$user->id;
		$event->description='testing 123';
		$event->save();



	}
}
