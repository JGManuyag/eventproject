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
         <th>Action</th>
     </tr>
</thead>

<tbody>
<tr>
	<td>1</td>
	<td>Arctic Monkeys at HSBC Arena</td>
	<td>AM Tour</td>
	<td>2014-11-14</td>
	<td><a href="view" class="btn btn-success">View</a></td>
</tr>
<tr>
	<td>2</td>
	<td>Arctic Monkeys Reading Festival</td>
	<td>Concert at Little John's Farm</td>
	<td>2016-02-20</td>
	<td><a href="view" class="btn btn-success">View</a></td>
</tr>
<tr>
	<td>3</td>
	<td>Arctic Monkeys Voodoo Music Festival</td>
	<td>Album Tour in New Orleans, LA</td>
	<td>2014-11-01</td>
	<td><a href="view" class="btn btn-success">View</a></td>
</tr>
<tr>
	<td>4</td>
	<td>Cueshe</td>
	<td>Live in Los Angeles! Wolololol</td>
	<td>2007-11-03</td>
	<td><a href="view" class="btn btn-success">View</a></td>
</tr>
</tbody>

</table>
@stop