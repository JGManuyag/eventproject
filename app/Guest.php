<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'guests';

    protected $fillable=
    [
        'event_id',
        'fname',
        'lname'
    ];

    public function event()
    {
    	return $this->belongsTo('App\Event');
    }
}