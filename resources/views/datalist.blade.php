
@extends('master')
@section('title', 'Data List')
@section('content')


<div class="container">
    <div class="card">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    </div>
@endif
</div>


<a class="btn btn-primary" href="{{url('/create')}}" role="button">Add</a>
<table class="table table-bordered text-center table-dark">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Class</th>
        <th scope="col">Mobile</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @php
            $i=1;
        @endphp
        @foreach ($users as $user)
        <tr>
            <td>{{ $i++ }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->class }}</td>
            <td>{{ $user->Mobile }}</td>
            <td><ul><a href = 'delete/{{ $user->id }}'>Delete</a>
            </ul>
            <ul><a href='view/{{$user->id}}'>View</ul>
            <ul><a href='edit/{{$user->id}}'>Edit</ul>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

  @endsection



