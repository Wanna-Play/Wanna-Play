<?php

use Esensi\Model\SoftModel;

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends SoftModel implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $rules = array(
		'first_name' => 'required|max:255',
		'last_name' => 'required|max:255',
		'username' => 'required|max:255|unique:users',
		'email' => 'required|max:255|unique:users',
		'gender' => 'required',
		'city' => 'required|max:255',
		'zip' => 'required|max:99999',
		'password' => 'required|max:255'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	protected $hashable = ['password'];

	public function events()
	{
		return $this->hasMany('GameEvent');
	}

	public function eventsAttending()
	{
		return $this->belongsToMany('GameEvent', 'event_user', 'user_id', 'event_id');
	}

	public function sports()
	{
		return $this->belongsToMany('Sport');
	}

	public function uploadImage($file)
    {
        $name = $file->getClientOriginalName();
        $path = 'images/user-imgs/';
        $file->move(public_path() . $path, $name);
        $this->profile_picture = $path . $name;
    }

    public function setSportsListAttribute($value)
	{
		$sportIds = [];
		$sports = explode (',', $value);
		foreach ($sports as $sportName) {
			/* firstOrCreate uses first instance or creates a new instantiation -
			stops sports table from duplicating sport names*/
			$sport = Sport::firstOrCreate(array('sport'=>$sportName));
			$sportIds[] = $sport->id;
			/* sync is a Laravel method to attach related models;
			sync accepts array of ids to be placed on pivot table
			only the ids in the array will be on the intermediate table sport_user pivot table*/

		}

		$this->sports()->sync($sportIds);
	}

}
