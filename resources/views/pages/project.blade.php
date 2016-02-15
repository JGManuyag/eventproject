@extends('layouts.sidebar')
@section('content')
<h1>Add Event</h1>

<hr>

<div class="form-group">
	<label>Events Name:</label>
	<input type="text" class="form-control">
</div>

<div class="form-group">
	<label>Description:</label>
	<textarea class="form-control"></textarea>
</div>

<div class="form-group">
	<label>Date:</label>
	<input type="date" class="form-control">
</div>

<div class="form-group">
<input type="submit" class="btn btn-success">
</div>

@stop