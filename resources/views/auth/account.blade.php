@extends('layouts.account')

@section('content')

<div class="form-horizontal">
    <h1>Edit Profile</h1>
    <hr><br>
    <div class="col-md-2"></div>
  <div class="col-md-10">
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
         @if ($user->image !== '')
          <img src="{{ asset($user->image) }}" alt="avatar" width="128" height="128" />
         @else 
          <img src="/profpics/default.jpg" alt="default" width="128" height="128" />
         @endif

         {!! Form::model($user,[
             'method' => 'patch',
             'action' => ['UserController@update', $user->id],
             'files' => 'true'
        ])!!}
            <br>
          {!! Form::file('image') !!}
          
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-7 personal-info">
          
      @include('errors.list')

        <h3>Personal info</h3>

          <div class="form-group">   
            <label class="col-lg-3 control-label">First Name</label>
            <div class="col-lg-8">
              {!! Form::text('fname', null, ['class' => "form-control"]) !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Last Name</label>
            <div class="col-lg-8">
              {!! Form::text('lname', null, ['class' => "form-control"]) !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">E-mail Address</label>
            <div class="col-lg-8">
              {!! Form::text('email', null, ['class' => "form-control", 'disabled' => "disabled"]) !!}
            </div>
          </div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              {!! Form::submit("Save Changes", ['class' => "btn btn-primary"])!!}
              <span></span>
              <a href="{{ url('/home')}}">
              <input type="button" class="btn btn-default" value="Cancel">
              </a>
            </div>
          </div>
        {!! Form::close() !!}
      </div>
  </div>
</div>
@stop