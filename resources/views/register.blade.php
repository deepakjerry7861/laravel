
@extends('master')
@section('title', 'Update Student')
@section('content')




<div class="container">
    <h1 class="align center">Register page</h1>
    <form action ="{{ route('customRegistration') }}" method = "post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" class="form-control" id="name" name="name"  placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email </label>
          <input type="email"  name="email" class="form-control" id="email"  placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
        </div>

        <input type="submit" class="btn btn-success" value="submit">

      </form>
    </div>



@endsection
