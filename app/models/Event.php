<?php

use \Esensi\Model\SoftModel;

class Event extends SoftModel {

	protected $table = 'Events';
	protected $fillable = [];

	protected $rules = array(
		'event_name' => 'Required|max:255',
		'Location_ID' => 'Required',
		'Sport' => 'Required',
		'Skill_Level' => 'Required',
		'Amount' => 'max:255',
		'Organizer_id' => 'Required',
		'Description' => 'max:1500'
	)
}
