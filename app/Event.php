<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable=
    [
        'evt_name',
        'evt_desc',
        'evt_date'
    ];

    public function attendee()
    {
    	return $this->hasMany('App\Attendee', 'event_id');
    }

    public function guest()
    {
        return $this->hasMany('App\Guest', 'event_id');
    }
}