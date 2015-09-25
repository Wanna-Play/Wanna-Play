<?php

use \Esensi\Model\SoftModel;

class Event extends SoftModel {

	protected $table = 'events';

	protected $rules = array(
		'event_name' => 'required|max:255',
		'location_id' => 'required',
		'sport_id' => 'required',
		'skill_level' => 'required',
		'amount' => 'max:255',
		'user_id' => 'required',
		'description' => 'max:1500'
	);

	public function organizer()
	{
		return $this->belongsTo('User', 'organizer_id');
	}

	public function sport()
	{
		return $this->has('Sport', 'sport');
	}

	public function location()
	{
		return $this->belongsTo('Location', 'location_id');
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
