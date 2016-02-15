@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">
<div class="container">
<div class="col-sm-3">
<img src="{{ asset($event->image)}}" height="250" width="250" class="avatar img-square" />
</div>
</div>
<h3>{{$event->evt_name}}</h3>

<h5>{{$event->evt_desc}}</h5>

<h5>Event will be on: <b>{{$event->evt_date}}</b></h5>

<td><a href="{{ route('attendees.create', ['event_id' => $event->id]) }}" class="btn btn-primary">Add Attendee</a></td>

<hr>

<br>

<table class="table table-striped table-bordered table-hover">

<thead>
    <tr class="bg-info">
    	<th width="15%">Attendees ID</th>
        <th>Attendees</th>
     </tr>
</thead>

<tbody>

@foreach($event->attendee as $attendee)

<tr>
	<td>{{$attendee->id}}</td>
	<td> <img src="{{ asset($attendee->image)}}" height="40" width="40" class="avatar img-circle" /> {{$attendee->fname}} {{$attendee->lname}}</td>
</tr>

@endforeach

</tbody>

</table>

	</div>

</div>

@stop