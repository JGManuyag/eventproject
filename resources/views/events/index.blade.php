@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>List of Events</h3>
<h5>The information you would like to check about an event.</h5>

<hr>

<table class="table table-striped table-bordered table-hover">

@if(Session::has('flash_message'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif

@if(Session::has('flash_message1'))
    <div class="alert alert-success">{{ Session::get('flash_message1') }}</div>
@endif

<br>

<thead>
    <tr class="bg-info">
         <th>ID</th>
         <th>Event</th>
         <th>Description</th>
         <th>Date</th>
         <th width="25%">View</th>
     </tr>
</thead>

<tbody>

     @foreach ($events as $event)

         <tr>
             <td>{{ $event->id }}</td>
             <td>{{ $event->evt_name }}</td>
             <td>{{ $event->evt_desc }}</td>
             <td>{{ $event->evt_date }}</td>
             <td class="text-center">
                <ul class="list-inline">
                    <li><a href="{{route('events.attendees.get', $event->id) }}" class="btn btn-primary">Attendees</a></li>
                    <li><a href="{{ route('events.guests.get', $event->id)  }}" class="btn btn-primary">Guests</a></li>
                </ul>
            </td>
         </tr>

     @endforeach

</tbody>

</table>

<?php echo $events->render(); ?>

    </div>

</div>

@endsection