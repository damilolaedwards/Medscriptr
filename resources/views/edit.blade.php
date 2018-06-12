@extends('layouts.app')

@section('content')


	<h3 class="text-center">Edit Record</h3>
	<hr>
	<div class="col-md-6 col-md-offset-3">
		@if (Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>

@endif
		<form class="form-horizontal" method="post" action="{{route('postedit', ['id' => $staff->id])}}">
  <div class="form-group {{ $errors->has('firstname') ?  ' has-error' : '' }}">
    <label for="firstname" class="col-sm-2 control-label">First Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="firstname" value="{{$staff->firstname}}" id="firstname" placeholder="First Name">
    </div>
    @if($errors->has('firstname'))
              <span class="help-block">{{$errors->first('firstname')}}</span>
              @endif
  </div>
  <div class="form-group {{ $errors->has('lastname') ?  ' has-error' : '' }}">
    <label for="lastname" class="col-sm-2 control-label">Last Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="lastname" value="{{$staff->lastname}}" id="lastname" placeholder="Last Name">
    </div>
    @if($errors->has('lastname'))
              <span class="help-block">{{$errors->first('lastname')}}</span>
              @endif
  </div>
  <div class="form-group {{ $errors->has('email') ?  ' has-error' : '' }}">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="email" value="{{$staff->email}}" id="email" placeholder="Email">
    </div>
    @if($errors->has('email'))
              <span class="help-block">{{$errors->first('email')}}</span>
              @endif
  </div>
  <input type="hidden" name="_token" value="{{Session::token()}}">
  
  <div class="form-group {{ $errors->has('role') ?  ' has-error' : '' }}">
  	<label for="Role" class="col-sm-2 control-label">Role</label>
  	<div class="col-sm-10">
  <select class="form-control" name="role">
  <option value="Doctor" @if ($staff->role == 'Doctor') selected="selected" @endif >Doctor</option>
  <option value="Nurse" @if ($staff->role == 'Nurse') selected="selected" @endif> Nurse</option>
  <option value="Administrator" @if ($staff->role == 'Administrator') selected="selected" @endif >Administrator</option>
</select>  
  	</div>
    @if($errors->has('role'))
              <span class="help-block">{{$errors->first('role')}}</span>
              @endif
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </div>
</form>
	</div>


@endsection