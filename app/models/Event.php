<?php

use \Esensi\Model\SoftModel;

class Event extends SoftModel {

	protected $table = 'Events';

	protected $rules = array(
		'event_name' => 'Required|max:255',
		'Location_ID' => 'Required',
		'Sport' => 'Required',
		'Skill_Level' => 'Required',
		'Amount' => 'max:255',
		'Organizer_id' => 'Required',
		'Description' => 'max:1500'
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
