@extends('layouts.side_guest')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Guest Information</h3>

<h5>The information you would like to collect from your guest.</h5>

<hr>

        @if ($errors->any())
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

<br>

{!! Form::open(['url' => 'guests', 'class' => 'form-horizontal']) !!}

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
        {!! Form::label('event_id', 'Event',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
        {!! Form::select('event_id', [' ' => 'Select Event'] + $events, $event->id, ['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        </div>
    </div>

{!! Form::close() !!}

    </div>

</div>

@stop