<?php

use \Esensi\Model\SoftModel;

class PlayerLocation extends SoftModel {

	protected $table = 'PlayerLocation';

	protected $fillable = [];

	protected $rules = array(
		'City' => 'Required|max:255|unique',
		'State' => 'Required|max:255'
	);

	public function players($value='')
	{
		return $this->hasMany('Player');
	}


}
