<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GuestRequest extends Request
{
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
            'event_id' => 'required',
            'fname' => 'required|unique:guests|min:4|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
            'lname' => 'required|unique:guests|min:3|regex:/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/',
        ];
    }

    public function messages()
    {
        return
        [
        'fname.required' => 'Please fill out your first name.',
        'lname.required' => 'Please fill out your last name.',
        'fname.unique' => 'That name was already taken.',
        'lname.unique' => 'That surname was already taken.',
        'fname.min' => 'First name must be at least 4 characters.',
        'lname.min' => 'Last name must be at least 3 characters.',
        'fname.regex' => 'First name may only contain letters.',
        'lname.regex' => 'Last name may only contain letters.',
        'event_id.required' => 'Please select an event.'
        ];
    }
}