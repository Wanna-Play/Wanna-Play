<?php

use Esensi\Model\SoftModel;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Player extends SoftModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $rules = array(
		'first_name' => 'Required|max:255',
		'last_name' => 'Required|max:255',
		'email' => 'Required|max:255|unique:players',
		'gender' => 'Required',
		'city_id' => 'Required',
		'password' => 'Required|max:255'
	)

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $hashable = ['password'];

	public function Events()
	{
		$this->hasMany('Event');
	}

	public function sports()
	{
		$this->hasMany('Sports')
	}

	public function playerLocation()
	{
		return $this->belongsTo('PlayerLocation', 'city_id');
	}

	public function uploadImage($file)
    {
        $name = $file->getClientOriginalName();
        $path = 'images/event-imgs/';
        $file->move(public_path() . $path, $name);
        $this->event_image = $path . $name;
    }

}
