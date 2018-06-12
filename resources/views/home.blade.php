@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
<input type="search" class="light-table-filter form-control" data-table="order-table" placeholder="Quick Filter">         
        </div>
<br>
    <div class="col-md-4 col-md-offset-8">
        <form class="form-inline" action="{{route('search')}}">
        <div class="input-group">
            <select class="form-control" name="query">
  <option value="Doctor">Doctor</option>
  <option value="Nurse">Nurse</option>
  <option value="Administrator">Administrator</option>
</select>  
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit">Advanced Search</button>
            </span>
            </div>

  
  
</form>

    </div>
    <div class="row">
 <div class="col-md-4 col-md-offset-4">   
@if (Session::has('message'))
<div class="alert alert-info alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  {{Session::get('message')}}
</div>

@endif
</div>

</div>
        <div class="bs-example" data-example-id="simple-table">
    <table class="order-table table">

        <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">
  Add New Record
</button>
       
      <p class="text-center lead">Staff list table.</p>
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Role</th>
          <th>Edit </th>
          <th>Delete</th>
        </tr>
      </thead>
      <tbody>
        @foreach($staffs as $staff)
        <tr>
          <th scope="row">{{$staff->id}}</th>
          <td>{{$staff->firstname}}</td>
          <td>{{$staff->lastname}}</td>
          <td>{{$staff->role}}</td>
          <td><a href="{{ route('getedit',['id' => $staff->id]) }}" type="button" class="btn btn-primary btn-sm">Edit</a></td>
          <td><a href="{{ route('delete',['id' => $staff->id]) }}" type="button" class="btn btn-danger btn-sm">Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
    </div>
    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add New Staff</h4>
      </div>
      <div class="row">
          <div class="col-md-10 col-md-offset-1" style="padding-bottom: 30px;">
              <div class="modal-body">
        <form class="form-horizontal" method="post" action="{{route('addnew')}}">
  <div class="form-group {{ $errors->has('firstname') ?  ' has-error' : '' }}">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" name="firstname" value="{{ Request::old('firstname') ?: ''}}" id="firstname" placeholder="First Name">
  </div>
  <div class="form-group {{ $errors->has('lastname') ?  ' has-error' : '' }}">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" name="lastname" value="{{ Request::old('lastname') ?: ''}}" id="lastname" placeholder="Last Name">
  </div>
  <input type="hidden" name="_token" value="{{Session::token()}}">
  <label for="role">Role</label>
  <div class="form-group {{ $errors->has('role') ?  ' has-error' : '' }}">
    <select class="form-control" name="role">
  <option value="Doctor" @if (Request::old('role') == 'Doctor') selected="selected" @endif >Doctor</option>
  <option value="Nurse" @if (Request::old('role') == 'Nurse') selected="selected" @endif >Nurse</option>
  <option value="Administrator"  @if (Request::old('role') == 'Administrator') selected="selected" @endif >Administrator</option>
</select>  
  </div>
  <button type="submit" class="btn btn-success pull-right">Submit</button>
 </form>
      </div>
      
          </div>
      </div>
         
      
      

    </div>
  </div>
</div>
</div>


<script type="text/javascript">
  (function(document) {
  'use strict';

  var LightTableFilter = (function(Arr) {

    var _input;

    function _onInputEvent(e) {
      _input = e.target;
      var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
      Arr.forEach.call(tables, function(table) {
        Arr.forEach.call(table.tBodies, function(tbody) {
          Arr.forEach.call(tbody.rows, _filter);
        });
      });
    }

    function _filter(row) {
      var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
      row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
    }

    return {
      init: function() {
        var inputs = document.getElementsByClassName('light-table-filter');
        Arr.forEach.call(inputs, function(input) {
          input.oninput = _onInputEvent;
        });
      }
    };
  })(Array.prototype);

  document.addEventListener('readystatechange', function() {
    if (document.readyState === 'complete') {
      LightTableFilter.init();
    }
  });

})(document);
</script>
@endsection
