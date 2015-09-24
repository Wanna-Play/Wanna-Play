<?php

use \Esensi\Model\SoftModel;

class Sports extends SoftModel {

	protected $table = 'sports';

	protected $rules = array(
		'sport' => 'required|max:250|unique'
	);

	public function players()
	{
		return $this->hasMany('Player');
	}

	public function events()
	{
		return $this->belongsTo('Event');
	}
}
