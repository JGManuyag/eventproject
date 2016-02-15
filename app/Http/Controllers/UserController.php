<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller {

	public function index()
	{

	}

	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return view('auth.account', compact('user', $user));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(CreateUserRequest $request, $id)
	{
		/*$this->validate($request, [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
		]);*/
		$user = User::find($id);
		
		$user->fname = $request->fname;
		$user->lname = $request->lname;
		$user->save();

		
		if( $request->hasFile('image'))
            { 

              $request->file('image')->move(public_path('profpics'), $request->file('image')->getClientOriginalName());

   			  $user->image =  'profpics/' . $request->file('image')->getClientOriginalName();

    			$user->save();
    		} 
    	 else 
    	 	{
      		  dd('No image was found');
			} 


		 return view('home', compact('user', $user));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
