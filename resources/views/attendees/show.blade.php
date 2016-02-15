@extends('layouts.side_attendee')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Attendees Information</h3>

<hr>

<img src="{{ asset($attendee->image) }}" height="100" width="100" class="avatar img-circle" />

<h4>{{$attendee->fname}} {{$attendee->lname}}</h4>

<h4>Identificaiton No: {{$attendee->id}}</h4>

<h4>{{$attendee->fname}} is attending on: <a href="{{url('/events', $attendee->event->id)}}"><i>{{$attendee->event->evt_name}}</i></a></h4>	

	</div>

</div>
@stop