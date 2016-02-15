<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'fname' => 'required|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
			'lname' => 'required|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
		];
	}

	public function messages()
	{
		return [
			'fname.required' => 'Please fill out your first name.',
			'lname.required' => 'Please fill out your last name.',
		];
	}

}
