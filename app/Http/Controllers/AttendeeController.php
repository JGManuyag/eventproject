<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Event;
use App\Guest;
use Illuminate\Http\Request;
use App\Http\Requests\AttendeeRequest;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ErrorBinder;
use Illuminate\Pagination\Paginator;
use Session, Input;

class AttendeeController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }

     public function index()
    {
      $attendees=Attendee::paginate(5); 
      return view('attendees.index',compact('attendees'));
    }

    public function create(AttendeeRequest $request)
    {
      $eventId = $request->get('event_id');

      $events = Event::lists('evt_name', 'id')->all();

      //$events = Event::lists('evt_name', 'id');

      return view('attendees.create', compact('events', 'eventId'));
    }

    public function store(AttendeeRequest $request)
    {
      Attendee::create($request->all());

      return redirect('events')->with('flash_message', trans('response.created') );
    }
    
    public function show($id)
    {
      $attendee=Attendee::find($id);
      return view('attendees.show',compact('attendee'));
    }
    
    public function edit($id)
    {
      $event=Event::lists('evt_name', 'id')->all();
      
      $attendee=Attendee::find($id);

      return view('attendees.edit')->with('event',$event)->with('attendee',$attendee);
    }
    
    public function update($id, AttendeeRequest $request)
    {
      $attendee=Attendee::find($id);
      
      //$attendee->update($request->all());

      $attendee->fname = $request->fname;
      $attendee->lname = $request->lname;
      $attendee->save();

      if( $request->hasFile('image'))
            { 

              $request->file('image')->move(public_path('attendee'), $request->file('image')->getClientOriginalName());

          $attendee->image =  'attendee/' . $request->file('image')->getClientOriginalName();

          $attendee->save();
        } 
       else 
        {
            dd('No image was found');
      }

      return redirect('attendees')->with('flash_message',  trans('response.updated') );;
    }
    
    public function destroy($id)
    {
      Attendee::find($id)->delete();

      return redirect('manage_att')->with('flash_message',  trans('response.deleted') );
    }

    public function multiple($id)
    {
      $event=Event::find($id);
      return view('attendees.multiple',compact('event'));
    }

    public function manage()
    {
      $attendees=Attendee::paginate(5);
      return view('attendees.manage', compact('attendees'));
    }
}