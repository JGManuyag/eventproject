<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EventRequest extends Request
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
            'evt_name' => 'required',
            'evt_date' => 'required|date|after:today',
            'evt_desc' => 'max:140'
        ];
    }

    public function messages()
    {
        return
        [
        'evt_name.required' => 'You forgot to fill out your events name.',
        'evt_name.unique' => 'That event name was already been taken.',
        'evt_name.min' => 'Event name must be at least 5 characters.', 
        'evt_date.required' => 'Kindly select a date for your event.',
        'evt_desc.min' => 'Description must be at lease 20 characters.',
        'evt_desc.max' => 'Description may not be greater than 140 characters.',
        'evt_date.after' => 'Please check the date of your event.'
        ];
    }
}