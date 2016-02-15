<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
            'fname' => 'required|unique:attendees|min:4|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
            'lname' => 'required|unique:attendees|min:3|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
            'email' => 'required|unique:attendees',
            'password' => 'required|confirmed|min:6'
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'fname' => $data['fname'],
			'lname' => $data['lname'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);
	}

}
