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

		$event->sport_id=2;
		$event->event_name='Fútbol Game';
		$event->start_time='Monday, Oct. 5, 2015 1:00 pm';
		$event->end_time='Monday, Oct. 5, 2015 4:00 pm';
		$event->location_id=$location->id;
		$event->gender='Co-Ed';
		$event->skill_level='Intermediate';
		$event->amount=2.00;
		$event->organizer_id=1;
		$event->event_image='http://lorempixel.com/200/200/sports/6/';
		$event->description='testing 123';
		$event->save();

	}
}
