@extends('layouts.side_participant')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Events</h3>
<h5>These are the list of the ongoing events.</h5>

<hr>

<br>

<table class="table table-striped table-bordered table-hover">

<thead>
    <tr class="bg-info">
         <th>Event</th>
         <th>Description</th>
         <th>Date</th>
         <th colspan="2">View</th>
     </tr>
</thead>

<tbody>

     @foreach ($events as $i => $event)

         <tr>
            <td>{{ $i +1 }} . {{ $event->evt_name }}</td>
            <td>{{ $event->evt_desc }}</td>
            <td>{{ $event->evt_date }}</td>
            <td><a href="{{url('participants',$event->id)}}" class="btn btn-primary">View</a></td>
         </tr>

     @endforeach

</tbody>

</table>

<?php echo $events->render(); ?>

    </div>

</div>

@endsection