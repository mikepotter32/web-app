<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	protected $fillable = ['username', 'email', 'password']; // allows these fields to be mass assignable

	public static $usernameRules = ['username' => 'required|unique:users|min:2|max:25'];

	public static $emailRules = ['email' => 'required|unique:users'];

	public static $passwordRules = ['password' => 'required|min:5'];

	public static $rules = [
			'username' => 'required|unique:users|min:2|max:25', //Makes username required, as well as users, logins and sessions/editing unique
			'email' => 'required|unique:users',
			'password' => 'required|min:5'
		];

	public $errors;

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function isValid($data)
	{
		$validation = Validator::make($data, static::$rules);

		if ($validation->passes())
		{
			return true;
		}

		$this->errors = $validation->messages();
		return false;
	}
}
