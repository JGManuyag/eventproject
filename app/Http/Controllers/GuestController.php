<?php

namespace App\Http\Controllers;

use App\Attendee;
use App\Event;
use App\Guest;
use App\Http\Requests\GuestRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\View\Middleware\ErrorBinder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Session, Input;

class GuestController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index()
    {
      $guests=Guest::paginate(5); //latest()->get(); //latest data on top
      return view('guests.index',compact('guests'));
    }

    public function create( Request $request )
    {
      $event = Event::find( $request->get('event_id') ) ? Event::find( $request->get('event_id') ) : new Event();

      $events = Event::lists('evt_name', 'id')->all();

      //$events = Event::lists('evt_name', 'id');

      if( $event->id ) return view('guests.add',compact('event') );
    
      return view('guests.create', compact('events', 'event'));
    }

    public function store(GuestRequest $request)
    {
      //Guest::create($request->all());

      $input = Input::all();

      foreach($input as $key => $value)
      {
        $data[] = array( 
          "fname" => 'fname'[$value], 
          "lname" => 'lname'[$value],
          "event_id" => 'event_id'[$value]
          );
      }

      Guest::insert($data);

      return redirect('events')->with('flash_message', trans('response.created') );
    }
    
    public function show($id)
    {
      $guest=Guest::find($id);
      return view('guests.show',compact('guest'));
    }
    
    public function edit($id)
    {
      $event=Event::lists('evt_name', 'id')->all();
      
      $guest=Guest::find($id);

      return view('guests.edit')->with('event',$event)->with('guest',$guest);
    }
    
    public function update($id, GuestRequest $request)
    {
      $guest=Guest::find($id);
      
      $guest->update($request->all());

      return redirect('guests')->with('flash_message', trans('response.updated'));
    }
    
    public function destroy($id)
    {
      Guest::find($id)->delete();

      return redirect('manage_g')->with('flash_message', trans('response.deleted'));
    }

    public function multiple($id)
    {
      $event=Event::find($id);
      return view('guests.multiple',compact('event'));
    }

   public function manage()
    {
      $guests=Guest::paginate(5);
      return view('guests.manage', compact('guests'));
    }

}