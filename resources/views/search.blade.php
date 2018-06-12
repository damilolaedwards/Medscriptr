@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
<a href="{{URL::previous()}}" type="button" class="btn btn-primary pull-left" >
  Go Back
</a>
<br>
        <div class="bs-example" data-example-id="simple-table">
    <table class="table">
        
       
      <p class="text-center lead">Search Results.</p>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Role</th>
        </tr>
      </thead>
      <tbody>
        @foreach($staffs as $staff)
        <tr>
          <th scope="row">{{$staff->id}}</th>
          <td>{{$staff->firstname}}</td>
          <td>{{$staff->lastname}}</td>
          <td>{{$staff->email}}</td>
          <td>{{$staff->role}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>
</div>


@endsection