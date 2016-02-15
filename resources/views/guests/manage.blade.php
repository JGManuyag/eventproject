@extends('layouts.side_guest')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Manage Guests</h3>

<h5>The guest information you would like to update or delete.</h5>

<hr>

<table class="table table-striped table-bordered table-hover">

@if(Session::has('flash_message'))
    <div class="alert alert-danger">{{ Session::get('flash_message') }}</div>
@endif

<br>

<thead>
    <tr class="bg-info">
         <th width="10%">ID</th>
         <th>Name</th>
         <th>Event</th>
         <th width="25%">Action</th>
     </tr>
</thead>

<tbody>

     @foreach ($guests as $guest)

         <tr>
             <td>{{ $guest->id }}</td>
             <td>{{ $guest->fname }} {{ $guest->lname }}</td>
             <td>{{ $guest->event->evt_name }}</td>
             <td class="text-center">
                <ul class="list-inline">
                    <li><a href="{{route('guests.edit',$guest->id)}}" class="btn btn-warning">Update</a></li>
                    <li>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['guests.destroy', $guest->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </li>
                </ul>
            </td>
         </tr>

     @endforeach

</tbody>

</table>

<?php echo $guests->render(); ?>

    </div>

</div>

@endsection