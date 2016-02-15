@extends('layouts.side_participant')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>{{$event->evt_name}}</h3>

<h5>{{$event->evt_desc}}</h5>

<h5>Event will be on: <b>{{$event->evt_date}}</b></h5>

<td><a href="#" class="btn btn-success">Join</a></td>

<hr>

<table class="table table-striped table-bordered table-hover">

<br>

<thead>
    <tr class="bg-info">
        <th>Attendees</th>
     </tr>
</thead>

<tbody>

@foreach($event->attendee as $i => $attendee)

<tr>
	<td>{{$i +1}}. {{$attendee->fname}} {{$attendee->lname}}</td>
</tr>

@endforeach

</tbody>

</table>

	</div>

</div>

</div>

@stop