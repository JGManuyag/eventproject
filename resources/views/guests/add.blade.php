@extends('layouts.side_event')

@section('content')


<script>

    $(document).ready(function() 
        {
            var max_fields = 5; 
            var wrapper = $("#first"); 
            var add_button = $("#bAdd"); 
            var x = 1; 
    
    $(add_button).click(function(e)
        { 
            e.preventDefault();
        
    if(x < max_fields)
        { 
            x++; 
            $(wrapper).append
            ('<div id="sec"><hr><a href="#" class="delete">Remove</a><div class="form-group"><div><input type="hidden" name="event_id[]" value="{{ $event->id}}"></div><label class="col-md-4 control-label">First Name</label><div class="col-md-6"><input type="text" name="fname[]" class="form-control" placeholder="First Name"></div></div><div class="form-group"><label class="col-md-4 control-label">Last Name</label><div class="col-md-6"><input type="text" name="lname[]" class="form-control" placeholder="Last Name"></div></div></div>'); //add input box
        }
    });
   
    $(wrapper).on("click",".delete", function(e)
        {
            e.preventDefault(); 
            $(this).parent('#sec').remove(); 
            x--;
        })
});

</script>

<div class="panel panel-default">
    
    <div class="panel-body">

<h3>Add new guest to: {{ $event->evt_name }}</h3>

<h5>The guest information you would like to collect.</h5>

<hr>

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

{!! Form::open(['url' => 'guests', 'class' => 'form-horizontal']) !!}

<div id="last">

<div class="form-group">
    <input type="hidden" name="event_id" value="{{ $event->id }}">    
</div>

<div class="form-group">

    <label class="col-md-4 control-label">First Name</label>

    <div class="col-md-6">
        <input type="text" name="fname[]" class="form-control" placeholder="First Name">
    </div>

</div>

<div class="form-group">    
    
    <label class="col-md-4 control-label">Last Name</label>
    
    <div class="col-md-6">
        <input type="text" name="lname[]" class="form-control" placeholder="Last Name">
    </div>

</div>

</div>

<div id="first">
    <div id="sec">
        
    </div>
</div>

<div class="form-group">
    <div class="col-md-4 col-md-offset-4">
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        {!! Form::submit('Add More', ['class' => 'btn btn-primary', 'id' => 'bAdd']) !!}
    </div>
</div>

{!! Form::close() !!}

    </div>

</div>

@stop