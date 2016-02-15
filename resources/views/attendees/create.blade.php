@extends('layouts.side_attendee')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Attendee Information</h3>

<h5>The information you would like to collect from your attendee.</h5>

<hr>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

<br>

{!! Form::open(['url' => 'attendees', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        <label class="col-md-4 control-label">First Name</label>
        <div class="col-md-6">
        <input type="text" name="fname" class="form-control" placeholder="First Name" value="{{ old('fname') }}">
        </div>
    </div>

    <div class="form-group">    
        <label class="col-md-4 control-label">Last Name</label>
        <div class="col-md-6">
        <input type="text" name="lname" class="form-control" placeholder="Last Name" value="{{ old('lname') }}">
        </div>
    </div>

    <div class="form-group">    
        <label class="col-md-4 control-label">E-mail Address</label>
        <div class="col-md-6">
        <input type="email" name="email" class="form-control" placeholder="Email Address" value="{{ old('email')}}">
        </div>
    </div>
<!--
    <div class="form-group">    
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
        <input type="password" name="password" class="form-control" placeholder="password">
        </div>
    </div>

    <div class="form-group">    
        <label class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
        <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password">
        </div>
    </div>
-->
    <div class="form-group">    
        {!! Form::label('event_id', 'Event',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
        {!! Form::select('event_id', [' ' => 'Select Event'] + $events, $eventId, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}

    </div>

</div>

@stop