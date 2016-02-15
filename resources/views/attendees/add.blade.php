@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Add new attendee to: {{ $event->evt_name }}</h3>

<h5>The attendee information you would like to collect.</h5>

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

<div id="last">

<div class="form-group">
    <input type="hidden" name="event_id" value="{{ $event->id }}">    
</div>

<div class="form-group">

    <label class="col-md-4 control-label">First Name</label>

    <div class="col-md-6">
        <input type="text" name="fname" class="form-control" placeholder="firstname">
    </div>

</div>

<div class="form-group">    
    
    <label class="col-md-4 control-label">Last Name</label>
    
    <div class="col-md-6">
        <input type="text" name="lname" class="form-control" placeholder="lastname">
    </div>

</div>

<div class="form-group">    
        <label class="col-md-4 control-label">E-mail Address</label>
        <div class="col-md-6">
        <input type="email" name="email" class="form-control" placeholder="email address">
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