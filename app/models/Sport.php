<?php

use \Esensi\Model\SoftModel;

class Sport extends SoftModel {

	protected $table = 'sports';

	protected $rules = array(
		'sport' => 'required|max:250|unique'
	);

	public function players()
	{
		return $this->belongsToMany('User');
	}

	public function events()
	{
		return $this->belongsTo('Event');
	}
}
