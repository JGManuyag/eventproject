@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<img src="{{ asset($event->image)}}" height="250" width="250" class="avatar img-square" />

<h3>{{$event->evt_name}}</h3>

<h5>{{$event->evt_desc}}</h5>

<h5>Event will be on: <b>{{$event->evt_date}}</b></h5>

<td><a href="{{ route('guests.create', ['event_id' => $event->id]) }}" class="btn btn-primary">Add Guest</a></td>

<hr>

<br>

<table class="table table-striped table-bordered table-hover">

<thead>
    <tr class="bg-info">
    	<th width="10%">Guest ID</th>
        <th>Guest Name</th>
     </tr>
</thead>

<tbody>

@foreach($event->guest as $guest)

<tr>
	<td>{{$guest->id}}</td>
	<td>{{$guest->fname}} {{$guest->lname}}</td>
</tr>

@endforeach

</tbody>

</table>

	</div>

</div>

@stop