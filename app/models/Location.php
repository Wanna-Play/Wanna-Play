<?php

use \Esensi\Model\SoftModel;

class Location extends SoftModel {
	protected $table = 'locations';

	protected $rules = array (

		'Name_Of_Location' => 'required|max:255',
		'Street' => 'required|max:255',
		'City' => 'required|max:255',
		'State' => 'required|max:255',
		'Zip' => 'required|max:11'

	);

	public function events()
	{
		$this->hasMany('Event');
	}
}
