<?php

namespace App\Http\Controllers;

use App\Event;
use App\Attendee;
use App\Http\Requests\EventRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ErrorBinder;
use App\Http\Controllers\Request;
use Illuminate\Pagination\Paginator;

class EventController extends Controller
{
     public function __construct()
     {
        $this->middleware('auth');
     }

     public function index()
    {
        $events=Event::paginate(5); 
        return view('events.index',compact('events'));
    }

    public function create()
    {
       return view('events.create');
    }
    
    public function store(EventRequest $request)
    {
       Event::create($request->all());
       \Session::flash('flash_message1', 'Event was successfully been saved!');
       return redirect('events');
    }
    
    public function show($id)
    {
       $event=Event::find($id);
       return view('events.show',compact('event'));
    }

    public function showGuest($id)
    {
       $event=Event::find($id);
       return view('events.guest',compact('event'));
    }
    
    public function edit($id)
    {
       $event=Event::find($id);
       return view('events.edit',compact('event'));
    }
    
    public function update($id, EventRequest $request)
    {
       $event=Event::find($id);
       \Session::flash('flash_message1', 'Event was successfully been updated!');
       //$event->update($request->all());

       $event->evt_name = $request->evt_name;
       $event->evt_desc = $request->evt_desc;
       $event->evt_date = $request->evt_date;
       $event->save();

       if( $request->hasFile('image'))
            { 

              $request->file('image')->move(public_path('event'), $request->file('image')->getClientOriginalName());

              $event->image =  'event/' . $request->file('image')->getClientOriginalName();

              $event->save();
        } 
       else 
        {
            dd('No image was found');
      }

       return redirect('events');
    }
    
    public function destroy($id)
    {
        Event::find($id)->delete();
        \Session::flash('flash_message1', 'Event has been deleted!');
        return redirect('events');
    }

    public function manage()
    {
      $events=Event::paginate(5);
      return view('events.manage', compact('events'));
    }
}