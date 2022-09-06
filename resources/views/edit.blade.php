@extends('master')
@section('title', 'Edit Student')
@section('content')




<h1 class="text-center">Student Details Update</h1>

<div class="container">
    <div class="card p-5">
    <form action ="/update/{{$viewdata[0]->id; }}" method = "post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="name" name="name"  value='{{ $viewdata[0]->name}}' placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email"  name="email" readonly class="form-control" id="email" value="{{ $viewdata[0]->email}}" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Class</label>
          <input type="text" class="form-control" name="class" id="class" value="{{ $viewdata[0]->class }}" placeholder="Enter Class">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Mobile</label>
          <input type="tel" class="form-control" name="Mobile" id="mobile" value="{{  $viewdata[0]->Mobile }}" placeholder="Enter Mobile No.">
        </div>
        <input type="submit" class="btn btn-success" value="submit">

      </form>
</div>
</div>








@endsection
