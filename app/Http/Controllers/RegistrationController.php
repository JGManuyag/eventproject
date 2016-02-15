<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use App\User;
use App\Http\Requests\RegisterUserRequest;

class RegistrationController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('registers.index');
	}

	public function login()
	{
		return view('registers.login');
	}
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('registers.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RegisterUserRequest $request)
	{
			User::create([
			'fname' => $request['fname'],
			'lname' => $request['lname'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
		]);
		
		return view("registers.login");
		//return redirect()->action('RegistrationController@index');
	}


}
