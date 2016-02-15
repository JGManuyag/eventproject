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
            ('<div id="sec"><hr><a href="#" class="delete">Remove</a><div class="form-group"><div><input type="hidden" value="{{$event->id}}"></div><label>Firstname:</label><input type="text" name="fname[]" class="form-control" placeholder="first name"></div><div class="form-group"><label>Lastname:</label><input type="text" name="lname[]" class="form-control" placeholder="last name"></div></div>'); //add input box
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

<h3>New Attendee</h3>

<hr>

@if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
@endif

{!! Form::open(['url' => 'attendees']) !!}

<div id="last">

    <div class="form-group">
        {!! Form::hidden('event_id',$event->id,null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('f_name', 'Firstname:') !!}
        {!! Form::text('fname',null,['class'=>'form-control', 'placeholder' => 'first name', 'name' =>'fname[]']) !!}
    </div>

    <div class="form-group">    
        {!! Form::label('l_name', 'Lastname:') !!}
        {!! Form::text('lname',null,['class'=>'form-control', 'placeholder' => 'last name', 'name' =>'lname[]']) !!}
    </div>

</div>

<div id="first">
    <div id="sec">
        
    </div>
</div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-success']) !!}
        {!! Form::submit('Add More', ['class' => 'btn btn-primary', 'id' => 'bAdd']) !!}
    </div>

{!! Form::close() !!}

@stop