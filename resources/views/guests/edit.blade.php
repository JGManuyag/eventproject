@extends('layouts.side_guest')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Update Informaton</h3>

<h5>The guest information you would like to change.</h5>

<hr>

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

<br>

    {!! Form::model($guest,['method' => 'PATCH', 'class' => 'form-horizontal','route'=>['guests.update',$guest->id]]) !!}

    <div class="form-group">
        {!! Form::label('f_name', 'First Name', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('fname',null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('l_name', 'Last Name', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('lname',null,['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">    
        {!! Form::label('event_id', 'Event', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('event_id',(['0' => 'Select Event'] + $event),null,['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
        </div>
    </div>

    {!! Form::close() !!}

    </div>

</div>
@stop