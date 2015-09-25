<?php

use \Esensi\Model\SoftModel;

class Location extends SoftModel {
	protected $table = 'locations';

	protected $rules = array (

		'name_of_location' => 'required|max:255',
		'street' => 'required|max:255',
		'city' => 'required|max:255',
		'zip' => 'required|max:5'

	);

	public function events()
	{
		$this->hasMany('Event');
	}
}
