@extends('master')
@section('title', 'Create Data')
@section('content')


<h1 class="text-center">Hello Create page</h1>

<div class="container">
<form action ="/savedata" method = "post">
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
      <label for="exampleInputEmail1">Class</label>
      <input type="text" class="form-control" name="class" id="class" placeholder="Enter Class">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Mobile</label>
      <input type="tel" class="form-control" name="Mobile" id="mobile" placeholder="Enter Mobile No.">
    </div>
    <input type="submit" class="btn btn-success" value="submit">

  </form>
</div>











{{-- @php
    print_r($_GET['name'].'<br>');
    print_r($_GET['email'].'<br>');
    print_r($_GET['class'].'<br>');
    print_r($_GET['Mobile'].'<br>');
@endphp --}}

@endsection
