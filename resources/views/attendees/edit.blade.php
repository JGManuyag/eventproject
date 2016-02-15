@extends('layouts.side_attendee')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Update Informaton</h3>

<h5>The attendee information you would like to change.</h5>

<hr>

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

<br>

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group" align="right">
                <div class="text-center">
                    @if ($attendee->image !== '')
                    <img src="{{ asset($attendee->image) }}" class="avatar img-circle" alt="avatar" width="135" height="130" />
                    @else 
                    <img src="/profpics/default.jpg" alt="default" width="128" height="128" />
                    @endif

                    {!! Form::model($attendee,['method' => 'PATCH','route'=>['attendees.update',$attendee->id] , 'class' => 'form-horizontal','files' => 'true']) !!}
                    <br>
                    {!! Form::file('image') !!}

                </div>
            </div>
        </div>

<div class="form-horizontal">

    @include('errors.list')
    
<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('f_name', 'First Name',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('fname',null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('l_name', 'Last Name',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('lname',null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('email', 'E-mail Address',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::email('email',null,['class'=>'form-control', 'readonly']) !!}
        </div>
    </div>
    
    <div class="form-group">    
        {!! Form::label('event_id', 'Event',['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::select('event_id',([' ' => 'Select Event'] + $event),null,['class'=>'form-control']) !!}
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            {!! Form::submit('Update', ['class' => 'btn btn-success']) !!}
        </div>
    </div>

    </div>
    </div>
</div>
    {!! Form::close() !!}

    </div>

</div>

@stop