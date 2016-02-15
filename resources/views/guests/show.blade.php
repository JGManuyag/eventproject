@extends('layouts.side_guest')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Guest Information</h3>

<hr>

<h4>{{$guest->fname}} {{$guest->lname}}</h4>

<h4>Identification No: {{$guest->id}}</h4>

<h4>{{$guest->fname}} is attending on: <a href="{{url('/guest', $guest->event->id)}}"><i>{{$guest->event->evt_name}}</i></a></h4>	

	</div>

</div>

@stop