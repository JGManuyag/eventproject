<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Attendee;

class AttendeeRequest extends Request
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
        $attendee = Attendee::find( $this->attendees );


        switch ( $this->method() ) {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'event_id' => 'required|not_in:0', // must not be space or zero.
                    'fname' => 'required',
                    'lname' => 'required',
                    'email'      => 'required|email|unique:attendees,email'
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'event_id' => 'required|not_in:0', // must not be space or zero.
                    'fname' => 'required',
                    'lname' => 'required',
                    'email'      => 'required|email|unique:attendees,email,'.$attendee->id,
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        return
        [
        'fname.required' => 'You forgot to fill out your first name!',
        'lname.required' => 'You forgot to fill out your first name!',
        'fname.unique' => 'That name was already taken.',
        'lname.unique' => 'That surname was already taken.',
        'fname.regex' => 'First name may only contain letters.',
        'lname.regex' => 'Last name may only contain letters.',
        'event_id.required' => 'Please select an event.',
        'email.required' => 'You forgot to fill out your email!',
        'email.unique' => 'That email was already taken.',
        /*'password.required' => 'Please fill out your password.',
        'password.confirmed' => 'Password did not match.',
        'password.min' => 'Password must be atleast 6 characters.'*/
        ];
    }
}