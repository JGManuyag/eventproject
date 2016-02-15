@extends('layouts.sidebar')
@section('content')
<h1>Events</h1>

<hr>

<table class="table table-striped table-bordered table-hover">

<thead>
    <tr class="bg-info">
         <th>ID</th>
         <th>Event</th>
         <th>Description</th>
         <th>Date</th>
         <th colspan="4">Action</th>
     </tr>
</thead>

<tbody>
<tr>
	<td>1</td>
	<td>John</td>
	<td>sample content</td>
	<td>2016-02-20</td>
	<td><a href="#" class="btn btn-primary">update</a></td>
	<td><a href="#" class="btn btn-warning">delete</a></td>

</tr>
<tr>
	<td>1</td>
	<td>John</td>
	<td>sample content</td>
	<td>2016-02-20</td>
	<td><a href="#" class="btn btn-primary">update</a></td>
	<td><a href="#" class="btn btn-warning">delete</a></td>
</tr>
<tr>
	<td>1</td>
	<td>John</td>
	<td>sample content</td>
	<td>2016-02-20</td>
	<td><a href="#" class="btn btn-primary">update</a></td>
	<td><a href="#" class="btn btn-warning">delete</a></td>
</tr>
<tr>
	<td>1</td>
	<td>John</td>
	<td>sample content</td>
	<td>2016-02-20</td>
	<td><a href="#" class="btn btn-primary">update</a></td>
	<td><a href="#" class="btn btn-warning">delete</a></td>
</tr>
</tbody>

</table>
@stop