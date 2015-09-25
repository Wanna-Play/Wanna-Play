<?php

use \Esensi\Model\SoftModel;

class Location extends SoftModel {
	protected $table = 'locations';

	protected $rules = array (

		'name_of_location' => 'required|max:255',
		'address' => 'required|max:255',
		'city' => 'required|max:255',
	);

	public function events()
	{
		$this->hasMany('Event');
	}
}
