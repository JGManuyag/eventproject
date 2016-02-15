@extends('layouts.side_guest')

@section('content')

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Guests Information</h3>

<h5>The information you would like to check about a guest.</h5>

<hr>

<table class="table table-striped table-bordered table-hover">

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

     @foreach ($guests as $guest)

         <tr>
             <td>{{ $guest->id }}</td>
             <td>{{ $guest->fname }} {{ $guest->lname }}</td>
             <td class="text-center">
                <ul class="list-inline">
                    <li><a href="{{url('guests',$guest->id)}}" class="btn btn-primary">View</a></li>
                </ul>
            </td>
         </tr>

     @endforeach

</tbody>

</table>

    </div>

</div>

<?php echo $guests->render(); ?>

@endsection