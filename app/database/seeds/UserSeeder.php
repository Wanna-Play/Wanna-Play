<?php
class UserSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(){

		$user = new User();

		$user->first_name=$_ENV['USER_FIRST_NAME'];
		$user->last_name=$_ENV['USER_LAST_NAME'];
		$user->username=$_ENV['USER_USERNAME'];
		$user->email=$_ENV['USER_EMAIL'];
		$user->password=$_ENV['USER_PASS'];
		$user->password_confirmation=$_ENV['USER_PASS'];
		$user->gender=$_ENV['USER_GENDER'];
		$user->city=$_ENV['USER_CITY'];
		$user->zip=$_ENV['USER_ZIP'];
		// $user->sports_tags=$_ENV['USER_SPORT'];
		$user->profile_picture=$_ENV['USER_IMAGE'];
		$user->save();
		// $user->getErrors->toArray();




	}
}
