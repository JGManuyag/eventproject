@extends('layouts.side_event')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Manage Events</h3>

<h5>The event information you would like to update or delete.</h5>

<hr>

<table class="table table-striped table-bordered table-hover">

@if(Session::has('flash_message1'))
    <div class="alert alert-danger">{{ Session::get('flash_message1') }}</div>
@endif

<br>

<thead>

    <tr class="bg-info">
        <th width="10%">ID</th>
        <th>Event</th>
        <th>Description</th>
        <th>Date</th>
        <th width="25%">Action</th>
    </tr>

</thead>

<tbody>

     @foreach ($events as $event)

        <tr>
            <td>{{ $event->id }}</td>
            <td>{{ $event->evt_name }}</td>
            <td>{{ $event->evt_desc }}</td>
            <td>{{ $event->evt_date }}</td>
            <td class="text-center">
                <ul class="list-inline">
                    <li><a href="{{route('events.edit',$event->id)}}" class="btn btn-warning">Update</a></li>
                    <li>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['events.destroy', $event->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </td>
        </tr>

     @endforeach

</tbody>

</table>

<?php echo $events->render(); ?>

    </div>

</div>

@endsection