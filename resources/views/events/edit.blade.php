@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Update Informaton</h3>

<h5>The event information you would like to change.</h5>

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
                    @if ($event->image !== '')
                    <img src="{{ asset($event->image) }}" class="avatar img-circle" alt="avatar" width="135" height="130" />
                    @else 
                    <img src="/profpics/default.jpg" alt="default" width="128" height="128" />
                    @endif

                    {!! Form::model($event,['method' => 'PATCH', 'class' => 'form-horizontal', 'files' => 'true', 'route'=>['events.update',$event->id]]) !!}
                    <br>
                    {!! Form::file('image') !!}

                </div>
            </div>
        </div>
<div class="form-horizontal">

@include('errors.list')

<div class="col-md-6">
    <div class="form-group">
        {!! Form::label('Event', 'Name', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('evt_name',null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Desc', 'Description', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('evt_desc',null,['class'=>'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('Date', 'Date', ['class'=>'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::input('date', 'evt_date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
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
</div>
    {!! Form::close() !!}

    </div>

</div>

@stop
