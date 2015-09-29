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
		$this->hasMany('Event');
	}

	public function sports()
	{
		$this->hasMany('Sport');
	}


	public function uploadImage($file)
    {
        $name = $file->getClientOriginalName();
        $path = 'images/user-imgs/';
        $file->move(public_path() . $path, $name);
        $this->event_image = $path . $name;
    }

}
