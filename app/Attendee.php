<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $table = 'attendees';

    protected $fillable=
    [
        'event_id',
        'fname',
        'lname',
        'email',
        'image'
        //'password'
    ];

    /*
    protected $hidden = ['password', 'remember_token'];

    public function setPasswordAttribute($password)
    {   
        $this->attributes['password'] = bcrypt($password);
    }
    */

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}