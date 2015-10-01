<?php

use \Esensi\Model\SoftModel;

class Sport extends SoftModel {

	protected $table = 'sports';

	protected $rules = array(
		'sport' => 'required|max:250|unique:sports'
	);

    protected $fillable = array('sport');

	public function users()
	{
		return $this->hasMany('User');
	}

	public function events()
	{
		return $this->hasMany('Event');
	}
}
