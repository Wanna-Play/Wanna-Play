<?php

use \Esensi\Model\SoftModel;

class Event extends SoftModel {

	protected $table = 'events';

	protected $rules = array(
		'event_name' => 'Required|max:255',
		'location_id' => 'Required',
		'sport_id' => 'Required',
		'skill_level' => 'Required',
		'amount' => 'max:255',
		'user_id' => 'Required',
		'description' => 'max:1500'
	);

	public function organizer()
	{
		return $this->belongsTo('Player', 'Organizer_id');
	}

	public function sport()
	{
		return $this->has('Sports', 'Sport');
	}

	public function location()
	{
		return $this->belongsTo('Location', 'Location_ID');
	}

	public function uploadImage($file)
    {
        $name = $file->getClientOriginalName();
        $path = 'images/event-imgs/';
        $file->move(public_path() . $path, $name);
        $this->event_image = $path . $name;
    }

	public function renderBody() {
        $parse = new Parsedown;
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        $body = $parse->text($this->description);

        return $clean_html = $purifier->purify($body);

    }
}
