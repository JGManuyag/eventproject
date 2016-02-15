@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Create new event</h3>

<h5>The information you would like to collect for your event.</h5>

<hr>

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

<br>

{!! Form::open(['url' => 'events', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
        <input type="text" name="evt_name" class="form-control" placeholder="Events Name" value="{{ old('evt_name')}}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Description</label>
        <div class="col-md-6">
        <input type="text" name="evt_desc" class="form-control" placeholder="Event Description" value="{{ old('evt_desc') }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label">Date</label>
        <div class="col-md-6">
        <input type="date" name="evt_date" class="form-control">
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
