
@extends('master')
@section('title', ' Student Login')
@section('content')
<div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    </div>
@endif



<div class="container">
    <h1 class="align center">Login page</h1>
    <form action ="{{ route('customLogin') }}" method = "post">
        @csrf

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
