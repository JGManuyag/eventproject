@extends('layouts.side_attendee')

@section('content')


<div class="panel panel-default">
    
    <div class="panel-body">

<table class="table table-striped table-bordered table-hover">

<h3>Attendees Information</h3>
<h5>The information you would like to check about an attendee.</h5>

<hr>

@if(Session::has('flash_message'))
    <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
@endif

<br>

<thead>
    <tr class="bg-info">
         <th width="10%">ID</th>
         <th>Name</th>
         <th width="15%">Action</th>
     </tr>
</thead>

<tbody>

     @foreach ($attendees as $attendee)

         <tr>
             <td>{{ $attendee->id }}</td>
             <td>{{ $attendee->fname }} {{ $attendee->lname }}</td>
             <td class="text-center">
                <ul class="list-inline">
                    <li><a href="{{url('attendees',$attendee->id)}}" class="btn btn-primary">View</a></li>
                </ul>
            </td>
         </tr>

     @endforeach

</tbody>

</table>

<?php echo $attendees->render(); ?>

    </div>

</div>

@endsection